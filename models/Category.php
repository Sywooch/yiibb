<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * @property integer $id
 * @property string $name
 * @property integer $display_position
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @return ActiveQuery
     */
    public function getForums()
    {
        return $this->hasMany(Forum::className(), ['category_id' => 'id'])
            ->inverseOf('category');
    }
}
