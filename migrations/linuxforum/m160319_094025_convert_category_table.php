<?php

use app\migrations\linuxforum\Migration;

class m160319_094025_convert_category_table extends Migration
{
    public function up()
    {
        $categories = [
            'Новости Linux',
            'Общие вопросы',
            'Дистрибутивы Linux',
            'Мир Linux',
            'Программирование и скриптинг',
            'Проекты',
            'Разное',
        ];

        $count = 1;
        foreach ($categories as $category) {
            $this->insert('{{%category}}', [
                'name' => $category,
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
