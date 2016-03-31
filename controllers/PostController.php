<?php

namespace app\controllers;

use app\components\controller\Controller;

class PostController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view');
    }
}