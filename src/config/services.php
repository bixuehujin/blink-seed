<?php
return [
    'session' => [
        'class' => 'blink\session\Session',
        'expires' => 3600 * 24 * 15,
        'storage' => [
            'class' => 'blink\session\FileStorage',
            'path' => __DIR__ . '/../../runtime/sessions'
        ]
    ],
    'auth' => [
        'class' => 'blink\auth\Auth',
        'model' => 'app\models\User',
    ],
    'log' => [
        'class' => 'blink\log\Logger',
        'targets' => [
            'file' => [
                'class' => 'blink\log\StreamTarget',
                'enabled' => true,
                'stream' => 'php://stderr',
                'level' => 'info',
            ]
        ],
    ],
];
