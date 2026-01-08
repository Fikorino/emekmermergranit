<?php

declare(strict_types=1);

session_start();

$appConfig = require __DIR__ . '/config/app.php';
if (!empty($appConfig['timezone'])) {
    date_default_timezone_set($appConfig['timezone']);
}

$scriptName = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
$basePath = rtrim(str_replace('/index.php', '', $scriptName), '/');
if ($basePath === '/') {
    $basePath = '';
}

define('BASE_PATH', $basePath);
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
define('BASE_URL', $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . BASE_PATH . '/');

spl_autoload_register(function (string $class): void {
    $paths = [
        __DIR__ . '/app/Controllers/' . $class . '.php',
        __DIR__ . '/app/Models/' . $class . '.php',
        __DIR__ . '/app/' . $class . '.php',
    ];

    foreach ($paths as $path) {
        if (file_exists($path)) {
            require $path;
            return;
        }
    }
});

require __DIR__ . '/app/helpers.php';

$router = new Router();
require __DIR__ . '/routes/web.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
$path = $requestUri;
if (BASE_PATH && str_starts_with($path, BASE_PATH)) {
    $path = substr($path, strlen(BASE_PATH));
    if ($path === '') {
        $path = '/';
    }
}
$path = '/' . ltrim($path, '/');

define('CURRENT_PATH', $path);

$router->dispatch($path, $_SERVER['REQUEST_METHOD'] ?? 'GET');
