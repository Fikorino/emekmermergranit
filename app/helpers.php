<?php

declare(strict_types=1);

function base_url(string $path = ''): string
{
    return rtrim(BASE_URL, '/') . '/' . ltrim($path, '/');
}

function asset(string $path = ''): string
{
    return base_url('public/' . ltrim($path, '/'));
}

function view(string $template, array $data = []): void
{
    extract($data, EXTR_SKIP);
    require __DIR__ . '/Views/' . $template . '.php';
}

function redirect(string $path): void
{
    header('Location: ' . base_url($path));
    exit;
}

function is_post(): bool
{
    return ($_SERVER['REQUEST_METHOD'] ?? 'GET') === 'POST';
}
