<?php

use yii\db\Migration;

class m160309_174145_setting_init extends Migration
{
    public function up()
    {
        $this->createTable('setting', [
            'name' => $this->string(255),
            'value' => $this->text(),
            'default_value' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('setting');
    }
}
