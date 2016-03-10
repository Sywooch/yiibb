<?php

use yii\db\Migration;

class m170310_161332_fill_linuxforum extends Migration
{
    public function up()
    {
        $this->fillCategory();
        $this->fillForum();
    }

    protected function fillForum()
    {
        $this->insert('{{%forum}}', [
            'name' => 'Новости',
            'description' => '',
            'redirect_url' => '',
            'moderators' => '',
            'count_topics' => '',
            'count_posts' => '',
            'last_post' => '',
            'last_post_id' => '',
            'last_post_user_id' => '',
            'last_post_username' => '',
            'position' => 0,
            'category_id' => 1,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);

        $this->insert('{{%forum}}', [
            'name' => 'Общие вопросы',
            'description' => '',
            'redirect_url' => '',
            'moderators' => '',
            'count_topics' => '',
            'count_posts' => '',
            'last_post' => '',
            'last_post_id' => '',
            'last_post_user_id' => '',
            'last_post_username' => '',
            'position' => 0,
            'category_id' => 2,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
    }

    protected function fillCategory()
    {
        $names = [
            'Новости Linux',
            'Общие вопросы',
            'Дистрибутивы Linux',
            'Мир Linux',
            'Программирование и скриптинг',
            'Проекты',
            'Разное',
        ];

        $count = 1;
        foreach ($names as $name) {
            $this->insert('{{%category}}', [
                'name' => $name,
                'position' => $count++,
                'status_id' => 1,
                'updated_at' => date('Y-m-d H:i:s', time()),
                'created_at' => date('Y-m-d H:i:s', time()),
            ]);
        }
    }

    public function down()
    {
        $this->truncateTable('{{%category}}');
    }
}
