<?php

namespace app\models;

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
        return $this->hasMany(Forum::className(), ['cat_id' => 'id'])
            ->inverseOf('category');
    }
}
