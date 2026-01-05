<?php

declare(strict_types=1);

class Router
{
    private array $routes = [
        'GET' => [],
        'POST' => [],
    ];

    public function get(string $pattern, callable $handler): void
    {
        $this->routes['GET'][] = [$this->normalize($pattern), $handler];
    }

    public function post(string $pattern, callable $handler): void
    {
        $this->routes['POST'][] = [$this->normalize($pattern), $handler];
    }

    public function dispatch(string $uri, string $method): void
    {
        $method = strtoupper($method);
        $routes = $this->routes[$method] ?? [];

        foreach ($routes as [$pattern, $handler]) {
            $regex = $this->patternToRegex($pattern);
            if (preg_match($regex, $uri, $matches)) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                call_user_func_array($handler, $params);
                return;
            }
        }

        http_response_code(404);
        view('404');
    }

    private function normalize(string $pattern): string
    {
        $pattern = '/' . trim($pattern, '/');
        return $pattern === '//' ? '/' : $pattern;
    }

    private function patternToRegex(string $pattern): string
    {
        $escaped = preg_replace('#\/#', '\\/', $pattern);
        $regex = preg_replace('#\{([a-zA-Z_][a-zA-Z0-9_]*)\}#', '(?P<$1>[^/]+)', $escaped);
        return '#^' . $regex . '$#';
    }
}
