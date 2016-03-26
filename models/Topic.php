<?php

namespace app\models;

use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * @property integer $id
 * @property string $forum_id
 * @property string $subject
 * @property string $first_post_id
 * @property string $first_post_username
 * @property string $first_post_created_at
 * @property string $last_post_id
 * @property string $last_post_username
 * @property string $last_post_created_at
 * @property integer $count_views
 * @property integer $count_replies
 * @property integer $closed
 * @property integer $sticked
 * @property integer $status_id
 * @property string $updated_at
 * @property string $created_at
 *
 * @property Forum $forum
 */
class Topic extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * @return ActiveQuery
     */
    public function getForum()
    {
        return $this->hasOne(Forum::className(), ['id' => 'forum_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['topic_id' => 'id'])
            ->inverseOf('topic');
    }
}
