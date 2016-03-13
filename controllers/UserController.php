<?php

namespace app\controllers;

use app\components\web\Controller;

class UserController extends Controller
{
    public function actionList()
    {
        return $this->render('list');
    }
}
