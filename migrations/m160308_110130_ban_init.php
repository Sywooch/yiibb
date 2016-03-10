<?php

use yii\db\Migration;

class m160308_110130_ban_init extends Migration
{
    public function up()
    {
        $this->createTable('bans', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'ip' => $this->bigInteger(20)->notNull(),
            'message' => $this->text(),
            'expire' => $this->dateTime(),
            'banned_by' => $this->integer()->notNull(),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('bans');
    }
}
