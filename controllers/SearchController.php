<?php

namespace app\controllers;

use app\components\controller\Controller;

/**
 * Class SearchController
 * @package app\controllers
 */
class SearchController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}