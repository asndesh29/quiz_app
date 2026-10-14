<?php

header('Content-Type: application/json');

echo json_encode([
    'runtime' => 'PHP',
    'php_version' => PHP_VERSION,
]);