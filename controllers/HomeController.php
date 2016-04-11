<?php

namespace app\controllers;

use app\models\Category;
use app\components\controller\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $categories = Category::find()->all();

        var_dump(\Yii::$app->user->can('updatePost'));

        return $this->render('index', [
            'categories' => $categories,
        ]);
    }

    public function actionTerms()
    {
        return $this->render('terms');
    }
}
