<?php

namespace app\models;

use blink\auth\Authenticatable;
use blink\core\BaseObject;

class User extends BaseObject implements Authenticatable
{
    /**
     * @inheritDoc
     */
    public static function findIdentity($id)
    {
        // TODO: Implement findIdentity() method.
    }

    /**
     * @inheritDoc
     */
    public function getAuthId()
    {
        // TODO: Implement getAuthId() method.
    }

    /**
     * @inheritDoc
     */
    public function validatePassword($password)
    {
        // TODO: Implement validatePassword() method.
    }
}
