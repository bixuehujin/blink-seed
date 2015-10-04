<?php

namespace app\http\controllers;

use blink\base\Object;

class IndexController extends Object
{
    public function sayHello()
    {
        return 'Hello world, Blink.';
    }
}
