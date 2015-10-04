<?php
return [
    'name' => 'my app',
    'root' => realpath(__DIR__ . '/../..'),
    'timezone' => 'UTC',
    'debug' => true,
    'runtime' => realpath(__DIR__ . '/../../runtime'),
    'controllerNamespace' => '\app\http\controllers'
];
