<?php

use yii\db\Migration;

class m170310_161335_fill_forum_for_lf extends Migration
{
    public function up()
    {
        $this->fillForum();
    }

    protected function fillForum()
    {
        $this->insert('{{%forum}}', [
            'name' => 'Новости',
            'position' => 0,
            'category_id' => 1,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('{{%forum}}', [
            'name' => 'Общие вопросы',
            'position' => 0,
            'category_id' => 2,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('{{%forum}}', [
            'name' => 'Ubuntu, Linux Mint',
            'position' => 0,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Debian GNU/Linux',
            'position' => 0,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'openSUSE и SUSE Linux Enterprise',
            'position' => 0,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('{{%forum}}', [
            'name' => 'Администрирование и настройка сетей',
            'position' => 0,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
    }

    public function down()
    {
        $this->truncateTable('{{%forum}}');
    }
}
