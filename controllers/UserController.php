<?php

namespace app\controllers;

use app\components\controller\Controller;
use app\models\User;

class UserController extends Controller
{
    public function actionView($id)
    {
        $user = User::find()
            ->where(['id' => $id])
            ->one();
        
        return $this->render('view', ['user' => $user]);
    }
    
    public function actionList()
    {
        $model = new \app\models\SearchUsers();
        $dataProvider = $model->search(\Yii::$app->request->get());
        $users = $dataProvider->getModels();

        return $this->render('list', [
            'model' => $model,
            'users' => $users,
            'dataProvider' => $dataProvider
        ]);
    }
}
