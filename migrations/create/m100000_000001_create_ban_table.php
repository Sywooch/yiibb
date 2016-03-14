<?php

use yii\db\Migration;

class m100000_000001_create_ban_table extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable('ban', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'ip' => $this->bigInteger(20)->notNull(),
            'message' => $this->text(),
            'expire' => $this->dateTime(),
            'banned_by' => $this->integer()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('ban');
    }
}
