<?php

namespace app\controllers\auth;

use yii\web\Controller;

class AuthController extends Controller
{
    public function actionConnectForm()
    {
        return $this->render('/auth/connect');
    }
}
