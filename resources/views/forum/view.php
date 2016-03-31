<?php

use app\widgets\Breadcrumbs;
use app\widgets\LinkPager;
use app\widgets\ForumViewList;

/** @var \app\models\Forum $forum */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = $forum->name;
$this->params['page'] = 'viewforum';
$this->params['breadcrumbs'] = [$this->title];

?>
<div class="linkst">
    <div class="inbox crumbsplus">
        <?= Breadcrumbs::widget() ?>
        <div class="pagepost">
            <div class="pagelink">
                <?= LinkPager::widget(['pagination' => $dataProvider->pagination]) ?>
            </div>
        </div>
        <div class="clearer"></div>
    </div>
</div>

<div class="blocktable" id="vf">
    <div class="box">
        <div class="inbox">
            <table>
                <thead>
                <tr>
                    <th scope="col" class="tcl">Topic</th>
                    <th scope="col" class="tc2">Replies</th>
                    <th scope="col" class="tc3">Views</th>
                    <th scope="col" class="tcr">Last post</th>
                </tr>
                </thead>
                <tbody>
                <?= ForumViewList::widget([
                    'dataProvider' => $dataProvider,
                    'options' => [],
                    'layout' => "{items}",
                    'itemView' => function ($model, $key, $index, $widget) use ($dataProvider) {
                        return $this->render('_view_list', [
                            'model' => $model,
                            'key' => $key,
                            'index' => $index,
                            'widget' => $widget,
                        ]);
                    },
                ]) ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="linksb">
    <div class="inbox crumbsplus">
        <div class="pagepost">
            <div class="pagelink">
                <?= LinkPager::widget(['pagination' => $dataProvider->pagination]) ?>
            </div>
        </div>
        <?= \app\widgets\Breadcrumbs::widget() ?>
        <div class="clearer"></div>
    </div>
</div>