<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
// require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
// $app = require_once __DIR__.'/../bootstrap/app.php';

// $app->handleRequest(Request::capture());


try {
    require __DIR__ . '/../vendor/autoload.php';

    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    error_log('Laravel bootstrap failure: ' . $e);

    error_log('Laravel startup error: ' . get_class($e));
    error_log('Laravel startup message: ' . $e->getMessage());
    error_log('Laravel startup file: ' . $e->getFile());
    error_log('Laravel startup line: ' . $e->getLine());

    http_response_code(500);

    echo 'Application startup failed.';
}