<?php

use yii\db\Migration;

class m160309_174154_forums extends Migration
{
    public function up()
    {
        $this->createTable('forums', [
            'id' => $this->primaryKey(),
            'name' => $this->string(120),
            'description' => $this->text(),
        ]);
    }

    public function down()
    {
        $this->dropTable('forums');
    }
}
