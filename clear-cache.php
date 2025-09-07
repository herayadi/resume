<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$app->make('Illuminate\Contracts\Console\Kernel')->call('config:clear');
$app->make('Illuminate\Contracts\Console\Kernel')->call('cache:clear');
echo "Cache cleared!";
?>