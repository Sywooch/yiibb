<?php

namespace app\controllers;

use app\components\controller\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionView($id)
    {
        $user = User::find()
            ->where(['id' => $id])
            ->one();
        
        return $this->render('view', ['user' => $user]);
    }
    
    public function actionList()
    {
        return $this->render('list');
    }
}
