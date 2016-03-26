<?php

namespace app\controllers\auth;

use app\components\controller\Controller;

class AuthController extends Controller
{
    public function actionLoginForm()
    {
        return $this->render('/auth/login');
    }

    public function actionRegisterForm()
    {
        return $this->render('/auth/register');
    }
}
