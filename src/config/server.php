<?php
return [
    'class' => '\blink\server\SwServer',
    'bootstrap' => __DIR__ . '/../bootstrap.php',
    'host' => env('host', '0.0.0.0'),
    'port' => env('port', 7788),
];
