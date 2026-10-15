<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';

header('Content-Type: application/json');

echo json_encode([
    'php_version' => PHP_VERSION,
    'base_path' => $app->basePath(),
    'environment' => $app->environment(),
    'config_bound' => $app->bound('config'),
    'files_bound' => $app->bound('files'),
    'view_bound' => $app->bound('view'),
    'storage_path' => $app->storagePath(),
    'providers_file_exists' => file_exists(
        __DIR__ . '/../bootstrap/providers.php'
    ),
    'services_cache_exists' => file_exists(
        __DIR__ . '/../bootstrap/cache/services.php'
    ),
]);