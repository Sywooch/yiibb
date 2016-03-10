<?php

use yii\db\Migration;

class m160309_173009_category_init extends Migration
{
    public function up()
    {
        $this->createTable('categories', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'display_position' => $this->smallInteger()->notNull(),
            'status_id' => $this->smallInteger()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('categories');
    }
}
