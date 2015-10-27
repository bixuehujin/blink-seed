<?php

require __DIR__ . '/../vendor/autoload.php';

$server = new blink\server\CgiServer([
    'bootstrap' => __DIR__ . '/../src/bootstrap.php'
]);

$server->run();
