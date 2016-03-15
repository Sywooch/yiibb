<?php

use yii\db\Migration;

class m100000_000002_create_category_table extends Migration
{
    public $tableName = '{{%category}}';
    
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'position' => $this->smallInteger()->unsigned()->notNull()->defaultValue(1),
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
