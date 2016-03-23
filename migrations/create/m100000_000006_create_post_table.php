<?php

use yii\db\Migration;

class m100000_000006_create_post_table extends Migration
{
    public $tableName = '{{%post}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'topic_id' => $this->integer()->notNull()->unsigned(),
            'user_id' => $this->integer()->notNull()->unsigned(),
            'user_ip' => $this->bigInteger(20),
            'text' => $this->text(),
            'edited_at' => $this->timestamp(),
            'edited_by' => $this->integer()->unsigned(),
            'status_id' => $this->boolean()->notNull()->defaultValue(true),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-post-topic_id', $this->tableName, 'topic_id');
        $this->createIndex('idx-post-user_id', $this->tableName, 'user_id');
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
