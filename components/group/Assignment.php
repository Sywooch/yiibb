<?php

namespace app\components\group;

use yii\base\Object;

class Assignment extends Object
{
    /**
     * @var string group name, must be unique.
     */
    public $group_name;
    /**
     * @var string permission name, must be unique.
     */
    public $permission_name;
    /**
     * @var integer created time in timestamp format.
     */
    public $created_at;
}