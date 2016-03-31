<?php

namespace app\controllers\auth;

use app\components\controller\Controller;

class PasswordController extends Controller
{
    public function actionForgotForm()
    {
        return $this->render('/auth/password/forgot');
    }
}
