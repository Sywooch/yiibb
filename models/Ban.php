<?php

namespace app\models;

use yii;

/**
 * This is the model class for table "ban".
 *
 * @property integer $id
 * @property string $user_id
 * @property string $ip
 * @property string $message
 * @property string $expire
 * @property integer $banned_by
 * @property string $updated_at
 * @property string $created_at
 */
class Ban extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ban';
    }

}
