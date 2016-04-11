<?php

namespace app\components\group;

class Permission
{
    /**
     * @var string permission name, must be unique.
     */
    public $name;
    /**
     * @var string group description.
     */
    public $description;
    /**
     * @var integer created time in timestamp format.
     */
    public $created_at;
    /**
     * @var integer updateed time in timestamp format.
     */
    public $updated_at;
}