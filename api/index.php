<?php

// Handle bootstrap/cache directory creation
$cacheDir = __DIR__ . '/../bootstrap/cache';
if (!is_dir($cacheDir)) {
    mkdir($cacheDir, 0755, true);
}

// Create necessary cache files if they don't exist
$cacheFiles = [
    'config.php',
    'routes.php',
    'services.php',
    'packages.php'
];

foreach ($cacheFiles as $file) {
    $filePath = $cacheDir . '/' . $file;
    if (!file_exists($filePath)) {
        file_put_contents($filePath, '<?php return [];');
    }
}

// public/index.php
require __DIR__.'/../public/index.php';
