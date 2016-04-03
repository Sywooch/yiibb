<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\resources\assets\bundles\AppAsset;
use app\widgets\Navigation;

/* @var $this \app\components\view\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php if (!$this->title): ?>
        <title><?= setting('board_title') ?></title>
    <?php else: ?>
        <title><?= e($this->title) ?> / <?= setting('board_title') ?></title>
    <?php endif; ?>
    <link rel="shortcut icon" href="<?= Url::to('@web/favicon.ico') ?>" />
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div id="pun<?= $this->name ?>" class="pun">
    <div class="top-box"></div>
    <div class="punwrap">
        <div id="brdheader" class="block">
            <div class="box">
                <div class="inbox" id="brdtitle">
                    <h1><a href="<?= url(['home/index']) ?>"><?= setting('board_title') ?></a></h1>
                    <div id="brddesc"><p><span><?= setting('board_description') ?></span></p></div>
                </div>
                <div class="inbox" id="brdmenu">
                    <?= Navigation::widget() ?>
                </div>
                <div class="inbox" id="brdwelcome">
                    <p class="conl">You are not logged in.</p>
                    <ul class="conr">
                        <li><span>Topics: <a title="Find topics with recent posts." href="search.php?action=show_recent">Active</a> | <a title="Find topics with no replies." href="search.php?action=show_unanswered">Unanswered</a></span></li>
                    </ul>
                    <div class="clearer"></div>
                </div>
            </div>
        </div>
        <pun_announcement>
            <div id="brdmain">
                <?= $content ?>
            </div>
            <div class="block" id="brdfooter">
                <h2><span>Board footer</span></h2>
                <div class="box">
                    <div class="inbox" id="brdfooternav">
                        <div class="conr">
                            <p id="feedlinks"><span class="atom"><a href="extern.php?action=feed&amp;type=atom">Atom active topics feed</a></span></p>
                            <p id="poweredby">Powered by <a href="http://fluxbb.org/">YiiBB</a></p>
                        </div>
                        <div class="clearer"></div>
                    </div>
                </div>
            </div>
    </div>
    <div class="end-box"></div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
