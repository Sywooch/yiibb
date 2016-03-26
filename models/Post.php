<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * @property integer $id
 * @property string $topic_id
 * @property string $user_id
 * @property string $user_ip
 * @property string $text
 * @property string $edited_at
 * @property string $edited_by
 * @property integer $status_id
 * @property string $updated_at
 * @property string $created_at
 * 
 * @property User $user
 * @property Topic $topic
 */
class Post extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @return ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id'])
            ->inverseOf('posts');
    }

    /**
     * @return ActiveQuery
     */
    public function getTopic()
    {
        return $this->hasOne(Topic::className(), ['id' => 'topic_id']);
    }
}
