<?php

namespace app\controllers;

use app\components\web\Controller;
use app\models\Topic;

class TopicController extends Controller
{
    public function actionView($id)
    {
        $topic = Topic::find()
            ->where(['id' => $id])
            //->with('forum')
            ->one();

        return $this->render('view', ['topic' => $topic]);
    }
}