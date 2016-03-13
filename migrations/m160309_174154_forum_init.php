<?php

use yii\db\Migration;

class m160309_174154_forum_init extends Migration
{
    public function up()
    {
        $this->createTable('forum', [
            'id' => $this->primaryKey(),
            'name' => $this->string(120)->notNull(),
            'description' => $this->text(),
            'redirect_url' => $this->string(255),
            'moderators' => $this->text(),
            'count_topics' => $this->integer()->defaultValue(0),
            'count_posts' => $this->integer()->defaultValue(0),
            'last_post' => $this->integer(),
            'last_post_id' => $this->integer(),
            'last_post_user_id' => $this->integer(),
            'last_post_username' => $this->string(),
            'position' => $this->smallInteger()->unsigned()->notNull()->defaultValue(1),
            'category_id' => $this->integer()->notNull(),
            'status_id' => $this->smallInteger()->notNull()->defaultValue(1),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('forum');
    }
}
