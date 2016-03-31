<?php

use app\widgets\Breadcrumbs;
use app\widgets\LinkPager;
use app\widgets\Post;

/** @var \app\models\Topic $topic */
/** @var \app\models\Post[] $posts */
/** @var \yii\data\ActiveDataProvider $dataProvider */

$this->title = e($topic->subject);
$this->name = 'viewtopic';

$this->params['breadcrumbs'] = [
    ['label' => $topic->forum->name, 'url' => ['forum/view', 'id' => $topic->forum->id]],
    ['label' => $topic->subject]
];
$postCount = 1;
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
<?php foreach ($posts as $post): ?>
    <?= Post::widget(['model' => $post, 'index' => $postCount]) ?>
    <?php $postCount++ ?>
<?php endforeach ?>
<div class="postlinksb">
    <div class="inbox crumbsplus">
        <div class="pagepost">
            <div class="pagelink">
                <?= LinkPager::widget(['pagination' => $dataProvider->pagination]) ?>
            </div>
        </div>
        <?= Breadcrumbs::widget() ?>
        <div class="clearer"></div>
    </div>
</div>