<?php

namespace app\controllers\auth;

use yii;
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

        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect('/');
        }

        return $this->render('/auth/login', ['model' => $model]);
    }

    public function actionRegisterForm()
    {
        return $this->render('/auth/register');
    }

    /**
     * Logout application action.
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
