<?php

declare(strict_types=1);

$router = require __DIR__ . '/bootstrap/index.php';

$uri = $_SERVER['REQUEST_URI'] ?? '/';
$basePath = '/chat-app/backend';

if (str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath));
}

$router->dispatch(
    $_SERVER['REQUEST_METHOD'] ?? 'GET',
    $uri
);
