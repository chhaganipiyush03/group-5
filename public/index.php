<?php

use Illuminate\Http\Request;

// Define the start time of the application
define('LARAVEL_START', microtime(true));

// Check if the application is in maintenance mode
if (file_exists($maintenanceFile = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenanceFile;
}

// Autoload Composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Bootstrap the Laravel application and handle the incoming request
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Process the HTTP request and send the response
$app->handle(Request::capture());
