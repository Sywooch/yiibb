<?php

use app\migrations\linuxforum\Migration;

class m160319_094051_convert_setting_table extends Migration
{
    public $tableName = '{{%setting}}';

    public function up()
    {
        $this->insert($this->tableName, [
            'name' => 'board_title',
            'value' => 'linuxforum'
        ]);
        $this->insert($this->tableName, [
            'name' => 'board_description',
            'value' => 'Форум о linux'
        ]);
        $this->insert($this->tableName, [
            'name' => 'date_format',
            'value' => 'Y-m-d'
        ]);
        $this->insert($this->tableName, [
            'name' => 'time_format',
            'value' => 'H:i:s'
        ]);
        $this->insert($this->tableName, [
            'name' => 'terms_text',
            'value' => 'Enter your rules here'
        ]);
    }

    public function down()
    {
        $this->truncateTable($this->tableName);
    }
}
