<?php

namespace app\controllers;

use app\components\controller\Controller;

class PostController extends Controller
{
    public function viewAction()
    {
        return $this->render('view');
    }
}