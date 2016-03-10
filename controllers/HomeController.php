<?php

namespace app\controllers;

use app\models\Category;
use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex()
    {
        $categories = Category::find()->all();

        return $this->render('index', [
            'categories' => $categories,
        ]);
    }
}
