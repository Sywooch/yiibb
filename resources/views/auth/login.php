<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>
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
                        ])->textInput([
                            'size' => 25,
                            'maxlength' => 255,
                        ])->label('Password<span class="field-required"> </span>') ?>
                        <div class="rbox clearb">
                            <label><input type="checkbox" tabindex="3" value="1" name="save_pass">Log me in automatically each time I visit.<br></label>
                        </div>
                        <p class="clearb">If you have not registered or have forgotten your password click on the appropriate link below.</p>
                        <p class="actions"><span><a tabindex="5" href="">Not registered yet?</a></span> <span><a tabindex="6" href="">Forgotten your password?</a></span></p>
                    </div>
                </fieldset>
            </div>
            <p class="buttons"><?= Html::submitButton('Login', ['tabindex' => 4]) ?></p>
        <?php ActiveForm::end() ?>
    </div>
</div>