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
    }

    public function down()
    {
        $this->truncateTable($this->tableName);
    }
}
