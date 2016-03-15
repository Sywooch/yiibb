<?php

namespace app\models;

/**
 * This is the model class for table "topic".
 *
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
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic';
    }
}
