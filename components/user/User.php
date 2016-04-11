<?php

namespace app\components\user;

use \yii\web\User as YiiUser;

class User extends YiiUser
{
    public function can($permissionName, $params = [], $allowCaching = true)
    {
        return \Yii::$app->role->checkAccess('', $permissionName);
    }
}