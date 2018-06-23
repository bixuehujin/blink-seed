<?php

namespace app\http\controllers;

use blink\core\BaseObject;

class IndexController extends BaseObject
{
    public function sayHello()
    {
        return 'Hello world, Blink.';
    }
}
