<?php

$directories = [
    '/tmp/storage/logs',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0775, true);
    }
}

require __DIR__ . '/../public/index.php';

// header('Content-Type: application/json');

// echo json_encode([
//     'runtime' => 'PHP',
//     'php_version' => PHP_VERSION,
// ]);