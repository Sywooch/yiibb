<?php

namespace app\resources\assets\bundles;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $basePath = '@webroot';
    /**
     * @inheritdoc
     */
    public $baseUrl = '@web';
    /**
     * @inheritdoc
     */
    public $css = [
        'css/app.css',
    ];
    /**
     * @inheritdoc
     */
    public $depends = [
    ];
}