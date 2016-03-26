<?php

use app\models\Post;
use yii\helpers\Url;

/** @var Post $model */
/** @var integer $index */

?>
<div id="p61624" class="blockpost rowodd firstpost blockpost1">
    <h2><span><span class="conr">#<?= $index ?></span> <a href="<?= url(['post/view', 'id' => $model->id]) . '#p' . $model->id ?>"><?= Yii::$app->formatter->asDatetime($model->created_at)?></a></span></h2>
    <div class="box">
        <div class="inbox">
            <div class="postbody">
                <div class="postleft">
                    <dl>
                        <dt><strong><a href="<?= Url::to(['user/view', 'id' => $model->user_id]) ?>"><?= $model->user->username ?></a></strong></dt>
                        <?php if(($model->user->title)): ?>
                        <dd class="usertitle"><strong><?= $model->user->title ?></strong></dd>
                        <?php endif ?>
                        <dd><span>Registered: 2016-01-02</span></dd>
                        <dd><span>Posts: 1</span></dd>
                    </dl>
                </div>
                <div class="postright">
                    <div class="postmsg">
                        <?= Yii::$app->formatter->asMarkdown($model->text) ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="inbox">
            <div class="postfoot clearb">
                <div class="postfootleft"><p>Пользователь: <span>Offline</span></p></div>
            </div>
        </div>
    </div>
</div>
