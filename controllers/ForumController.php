<?php

namespace app\controllers;

use app\components\controller\Controller;
use yii\data\ActiveDataProvider;
use app\models\Forum;
use app\models\Topic;

class ForumController extends Controller
{
    public function actionView($id)
    {
        $forum = Forum::findOne($id);

        $query = Topic::find()
            ->where(['forum_id' => $id])
            ->orderBy(['last_post_created_at' => SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'forcePageParam' => false,
                'pageSizeLimit' => false,
                'defaultPageSize' => 30,
            ],
        ]);

        $topics = $dataProvider->getModels();

        return $this->render('view', [
            'dataProvider' => $dataProvider,
            'forum' => $forum,
            'topics' => $topics,
        ]);
    }
}
