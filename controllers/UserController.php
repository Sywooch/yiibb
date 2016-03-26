<?php

namespace app\controllers;

use app\components\controller\Controller;

class UserController extends Controller
{
    public function actionList()
    {
        return $this->render('list');
    }
}
