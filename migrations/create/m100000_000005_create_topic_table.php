<?php

use yii\db\Migration;

class m100000_000005_create_topic_table extends Migration
{
    public $tableName = '{{%topic}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'forum_id' => $this->integer()->unsigned()->notNull(),
            'subject' => $this->string(255)->notNull(),
            'first_post_id' => $this->integer()->unsigned()->notNull(),
            'first_post_username' => $this->string(40),
            'first_post_created_at' => $this->timestamp(),
            'last_post_id' => $this->integer()->unsigned()->notNull(),
            'last_post_username' => $this->string(40),
            'last_post_created_at' => $this->timestamp(),
            'count_views' => $this->integer()->defaultValue(0),
            'count_replies' => $this->integer()->defaultValue(0),
            'closed' => $this->boolean()->notNull()->defaultValue(false),
            'sticked' => $this->boolean()->notNull()->defaultValue(false),
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
