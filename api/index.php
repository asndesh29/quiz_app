<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

header('Content-Type: application/json');

try {
    $app->register(
        \Illuminate\View\ViewServiceProvider::class
    );

    echo json_encode([
        'app_bootstrapped' => true,
        'view_bound' => $app->bound('view'),
        'view_resolves' => $app->make('view') !== null,
    ]);
} catch (\Throwable $e) {
    error_log(
        'View diagnostic: ' . get_class($e) .
        ': ' . $e->getMessage()
    );

    http_response_code(500);

    echo json_encode([
        'error' => get_class($e),
        'message' => $e->getMessage(),
    ]);
}

// header('Content-Type: application/json');

// echo json_encode([
//     'runtime' => 'PHP',
//     'php_version' => PHP_VERSION,
// ]);