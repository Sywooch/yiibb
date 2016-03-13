<?php

namespace app\controllers;

use app\models\Forum;
use yii\web\Controller;

class ForumController extends Controller
{
    public function actionView($id)
    {
        $forum = Forum::findOne($id);
        
        return $this->render('view', [
            'forum' => $forum
        ]);
    }
}
