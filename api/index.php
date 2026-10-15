<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

header('Content-Type: application/json');

try {
    $app->register(
        \Illuminate\Filesystem\FilesystemServiceProvider::class
    );

    echo json_encode([
        'files_bound' => $app->bound('files'),
        'files_resolves' => $app->make('files') !== null,
        'view_bound' => $app->bound('view'),
    ]);
} catch (\Throwable $e) {
    error_log(
        'Container diagnostic: ' .
        get_class($e) . ': ' . $e->getMessage()
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