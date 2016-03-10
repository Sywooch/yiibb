<?php

use yii\db\Migration;

class m160309_173009_category_init extends Migration
{
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'position' => $this->smallInteger()->notNull()->defaultValue(0),
            'status_id' => $this->smallInteger()->notNull()->defaultValue(1),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('category');
    }
}
