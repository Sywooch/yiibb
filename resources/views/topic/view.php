<?php

use app\widgets\Breadcrumbs;
use app\widgets\Post;

/* @var \app\models\Topic $topic */
/* @var \app\models\Post[] $posts */

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
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
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
            <p class="pagelink conl"><span class="pages-label">Pages: </span><strong class="item1">1</strong></p>
        </div>
        <?= Breadcrumbs::widget() ?>
        <div class="clearer"></div>
    </div>
</div>