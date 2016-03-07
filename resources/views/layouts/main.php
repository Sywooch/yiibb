<?php

use yii\helpers\Html;
use yii\helpers\Url;
use app\resources\assets\bundles\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

$this->title = 'YiiBB';

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php if ($this->title): ?>
        <title><?= Html::encode($this->title) ?></title>
    <?php else: ?>
    <?php endif; ?>
    <link rel="shortcut icon" href="<?= Url::to('@web/favicon.ico') ?>" />
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>

<div id="pun<pun_page>" class="pun">
    <div class="top-box"></div>
    <div class="punwrap">
        <div id="brdheader" class="block">
            <div class="box">
                <div class="inbox" id="brdtitle">
                    <h1><a href="index.php">My FluxBB Forum</a></h1>
                    <div id="brddesc"><p><span>Unfortunately no one can be told what FluxBB is - you have to see it for yourself.</span></p></div>
                </div>
                <div class="inbox" id="brdmenu">
                    <ul>
                        <li class="isactive" id="navindex"><a href="index.php">Index</a></li>
                        <li id="navuserlist"><a href="userlist.php">User list</a></li>
                        <li id="navsearch"><a href="search.php">Search</a></li>
                        <li id="navregister"><a href="register.php">Register</a></li>
                        <li id="navlogin"><a href="login.php">Login</a></li>
                    </ul>
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
            <pun_footer>
    </div>
    <div class="end-box"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
