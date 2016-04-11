<?php

use yii\db\Migration;

class m100000_000010_create_user_group_assignment_table extends Migration
{
    public $tableName = '{{%user_group_assignment}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'group_name' => $this->string(64)->notNull(),
            'permission_name' => $this->string(64)->notNull(),
            'created_at' => $this->timestamp()->notNull(),
            'PRIMARY KEY (group_name, permission_name)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
