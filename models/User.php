<?php

namespace app\models;

use yii;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $role
 * @property string $auth_key
 * @property string $username
 * @property string $email
 * @property integer $email_activated
 * @property string $email_activate_send_at
 * @property string $password_hash
 * @property string $password_change_token
 * @property string $password_changed_at
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $title
 * @property integer $reputation_enable
 * @property integer $reputation_minus
 * @property integer $reputation_plus
 * @property integer $last_post_id
 * @property integer $count_posts
 * @property string $language
 * @property string $timezone
 * @property string $signature
 * @property integer $show_signature
 * @property integer $status_id
 * @property string $updated_at
 * @property string $created_at
 * 
 * @property Post[] $posts
 */
class User extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @return ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['user_id' => 'id'])
            ->inverseOf('user');
    }
}
