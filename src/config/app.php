<?php
return [
    /*------------------------------------------------------------------
     * The Application Name
     *------------------------------------------------------------------
     *
     * Here you specifies the name of your application.
     *
     */

    'name' => 'my app',

    /*------------------------------------------------------------------
     * Application Root Path
     *------------------------------------------------------------------
     *
     * Specify the root path of your application.
     *
     */

    'root' => realpath(__DIR__ . '/../..'),


    /*------------------------------------------------------------------
     * Application Timezone
     *------------------------------------------------------------------
     *
     * Specify the default timezone for your application, which will be
     * used by the PHP date and data-time functions.
     *
     */

    'timezone' => 'UTC',

    /*------------------------------------------------------------------
     * Application Debug Mode
     * -----------------------------------------------------------------
     *
     * When debug mode is enabled, detailed error message with stack traces
     * will be shown on every error in your application, you should disable
     * this in production environment.
     *
     */

    'debug' => true,

    /*------------------------------------------------------------------
     * Application Runtime Path
     *-----------------------------------------------------------------
     *
     * Specify the runtime path that used to store generated temporary
     * files, you should make sure the directory is writable by Blink
     * processes.
     *
     */

    'runtime' => realpath(__DIR__ . '/../../runtime'),

    /*------------------------------------------------------------------
     * Default Controller Namespace
     *------------------------------------------------------------------
     *
     * The default namespace of your controllers, with this configured,
     * you can write relative controller class name in your routes configuration
     * file.
     *
     */

    'controllerNamespace' => '\app\http\controllers',


    /*------------------------------------------------------------------
     * Request Default Configurations
     *------------------------------------------------------------------
     *
     * Here you may override the default configurations for the Request
     * object, and even implement your own Request class.
     *
     */

    'request' => [

    ],
];
