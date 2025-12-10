<?php

// Start session
session_start();

// Load autoloader
require_once __DIR__ . '/autoload.php';

// Check maintenance mode
use App\Middleware\MaintenanceMiddleware;
MaintenanceMiddleware::handle();

// Load routes
$router = require __DIR__ . '/src/Config/routes.php';

// Resolve the current route
$router->resolve();
