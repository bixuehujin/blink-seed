<?php
/**
 * Basic application configurations.
 */
$config = require __DIR__ . '/config/app.php';

$app = new blink\http\Application($config);

/**
 * Loading routes definitions.
 */
$app->routes = require __DIR__ . '/http/routes.php';

/**
 * Loading application service definitions.
 */
$app->services = require __DIR__ . '/config/services.php';

return $app;
