<?php

namespace app\models;

/**
 * This is the model class for table "forums".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 */
class Forum extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'forums';
    }


}
