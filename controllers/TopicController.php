<?php

namespace app\controllers;

use app\components\web\Controller;

class TopicController extends Controller
{
    public function actionView($id)
    {
        return $this->render('view');
    }
}