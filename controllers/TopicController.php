<?php

namespace app\controllers;

use app\components\controller\Controller;
use yii\data\ActiveDataProvider;
use app\models\Topic;
use app\models\Post;

class TopicController extends Controller
{
    public function actionView($id)
    {
        $topic = Topic::find()
            ->where(['id' => $id])
            ->with('forum')
            ->one();

        $query = Post::find()
            ->where(['topic_id' => $id])
            ->with('user');

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeLimit' => false,
                'defaultPageSize' => 30,
            ],
        ]);

        $posts = $dataProvider->getModels();

        return $this->render('view', [
            'dataProvider' => $dataProvider,
            'topic' => $topic,
            'posts' => $posts,
        ]);
    }
}