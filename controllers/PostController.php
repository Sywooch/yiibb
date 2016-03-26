<?php

namespace app\controllers;

use app\components\controller\Controller;

class PostController extends Controller
{
    public function actionView()
    {
        return $this->render('view');
    }
}