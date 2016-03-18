<?php
namespace app\widgets;

use yii;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs as YiiBreadcrumbs;

class Breadcrumbs extends YiiBreadcrumbs
{
    /**
     * @inheritdoc
     */
    public $options = ['class' => 'crumbs'];
    /**
     * @inheritdoc
     */
    public $itemTemplate = "<li>{link}</li><li>&#187;</li>";

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->homeLink = [
            'label' => Yii::$app->setting->get('board_title'),
            'url' => Url::home(),
        ];

        if (isset($this->getView()->params['breadcrumbs'])) {
            $this->links = $this->getView()->params['breadcrumbs'];
        } else {
            $this->links = [];
        }
    }
}
