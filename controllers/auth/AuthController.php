<?php

namespace app\controllers\auth;

use app\components\controller\Controller;
use app\models\forms\LoginForm;

class AuthController extends Controller
{
    public function actionLoginForm()
    {
        $model = new LoginForm();

        return $this->render('/auth/login', ['model' => $model]);
    }

    public function actionLogin()
    {
        $model = new LoginForm();

        return var_dump($_POST);
    }

    public function actionRegisterForm()
    {
        return $this->render('/auth/register');
    }
}
