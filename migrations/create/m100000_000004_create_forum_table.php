<?php

use yii\db\Migration;

class m100000_000004_create_forum_table extends Migration
{
    public $tableName = '{{%forum}}';
    
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(120)->notNull(),
            'description' => $this->text(),
            'redirect_url' => $this->string(255),
            'moderators' => $this->text(),
            'count_topics' => $this->integer()->defaultValue(0),
            'count_posts' => $this->integer()->defaultValue(0),
            'last_post' => $this->integer(),
            'last_post_id' => $this->integer()->unsigned(),
            'last_post_user_id' => $this->integer()->unsigned(),
            'last_post_username' => $this->string(40),
            'position' => $this->smallInteger()->unsigned()->notNull()->defaultValue(1),
            'category_id' => $this->integer()->notNull()->unsigned(),
            'status_id' => $this->boolean()->notNull()->defaultValue(true),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
