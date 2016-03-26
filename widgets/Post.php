<?php

namespace app\widgets;

use yii\base\Widget;

class Post extends Widget
{
    /**
     * @var Post
     */
    public $model;
    /**
     * @var integer
     */
    public $index;
    

    /**
     * Renders the post view.
     */
    public function run()
    {
        $index = $this->index;
        
        echo $this->render('post', ['model' => $this->model, 'index' => $index]);
    }
}
