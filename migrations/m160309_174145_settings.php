<?php

use yii\db\Migration;

class m160309_174145_settings extends Migration
{
    public function up()
    {
        $this->createTable('settings', [
            'name' => $this->string(255),
            'value' => $this->text(),
            'default_value' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('settings');
    }
}
