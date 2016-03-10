<?php

namespace app\models;

/**
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $redirect_url
 * @property string $moderators
 * @property integer $count_topics
 * @property integer $count_posts
 * @property integer $last_post
 * @property integer $last_post_id
 * @property integer $last_post_user_id
 * @property string $last_post_username
 * @property integer $display_position
 * @property integer $category_id
 * @property integer $status_id
 * @property string $updated_at
 * @property string $created_at
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
