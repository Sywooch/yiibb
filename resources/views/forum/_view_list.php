<?php

/** @var \app\models\Topic $model */

?>
<tr class="rowodd">
    <td class="tcl">
        <div class="icon"><div class="nosize">1</div></div>
        <div class="tclcon">
            <div>
                <a href="<?= url(['topic/view', 'id' => $model->id])?>"><?= e($model->subject) ?></a> <span class="byuser"><?= $model->first_post_username ?></span>
            </div>
        </div>
    </td>
    <td class="tc2"><?= $model->count_replies ?></td>
    <td class="tc3"><?= $model->count_views ?></td>
    <td class="tcr"><a href=""><?= Yii::$app->formatter->asDatetime($model->last_post_created_at) ?></a> <span class="byuser"><?= $model->last_post_username ?></span></td>
</tr>