<?php

use yii\db\Migration;

class m160309_174154_forum_init extends Migration
{
    public function up()
    {
        $this->createTable('forums', [
            'id' => $this->primaryKey(),
            'name' => $this->string(120),
            'description' => $this->text(),
            'redirect_url' => $this->string(255),
            'moderators' => $this->text(),
            'count_topics' => $this->integer(),
            'count_posts' => $this->integer(),
            'last_post' => $this->integer(),
            'last_post_id' => $this->integer(),
            'last_post_user_id' => $this->integer(),
            'last_post_username' => $this->string(),
            'display_position' => $this->smallInteger()->notNull(),
            'category_id' => $this->integer()->notNull(),
            'status_id' => $this->smallInteger()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('forums');
    }
}
