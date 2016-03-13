<?php

namespace app\controllers;

use yii\web\Controller;

class ForumController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view');
    }
}