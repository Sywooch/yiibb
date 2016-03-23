<?php

use yii\db\Migration;

class m100000_000003_create_setting_table extends Migration
{
    public $tableName = '{{%setting}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->tableName, [
            'name' => $this->string(255)->notNull(),
            'value' => $this->text(),
            'PRIMARY KEY (name)',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
