<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var \app\models\forms\LoginForm $model */

?>
<?php if ($model->hasErrors()): ?>
    <div id="posterror" class="block">
        <h2><span><?= \Yii::t('app/login', 'Important') ?></span></h2>
        <div class="box">
            <?= Html::errorSummary($model, [
                'class' => 'inbox error-info',
                'header' => '<p>' . \Yii::t('app/login', 'Error summary') . '</p>',
            ]) ?>
        </div>
    </div>
<?php endif; ?>
<div class="blockform">
    <h2><span>Login</span></h2>
    <div class="box">
        <?php $form = ActiveForm::begin([
            'options' => ['id' => 'login'],
            'enableClientValidation' => false,
            'enableClientScript' => false,
        ]) ?>
        <form action="" method="post" id="login">
            <div class="inform">
                <fieldset>
                    <legend>Enter your username and password below</legend>
                    <div class="infldset">
                        <?= $form->field($model, 'email', [
                            'template' => "{label}\n{input}",
                            'options' => [
                                'class' => 'conl'
                            ]
                        ])->textInput([
                            'size' => 25,
                            'maxlength' => 40,
                        ])->label('Email<span class="field-required"> </span>') ?>
                        <?= $form->field($model, 'password', [
                            'template' => "{label}\n{input}",
                            'options' => [
                                'class' => 'conl'
                            ]
                        ])->passwordInput([
                            'size' => 25,
                            'maxlength' => 255,
                        ])->label('Password<span class="field-required"> </span>') ?>
                        <div class="rbox clearb">
                            <?= $form->field($model, 'remember')
                                ->checkbox(['label' => 'Log me in automatically each time I visit.']) ?>
                        </div>
                        <p class="clearb">If you have not registered or have forgotten your password click on the appropriate link below.</p>
                        <p class="actions"><span><a tabindex="5" href="<?= url(['auth/auth/register-form']) ?>">Not registered yet?</a></span> <span><a tabindex="6" href="<?= url(['auth/password/forgot-form']) ?>">Forgotten your password?</a></span></p>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><?= Html::submitButton('Login', ['tabindex' => 4]) ?></p>
        <?php ActiveForm::end() ?>
    </div>
</div>