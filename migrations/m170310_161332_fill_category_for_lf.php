<?php

use yii\db\Migration;

class m170310_161332_fill_category_for_lf extends Migration
{
    public function up()
    {
        $this->fillCategory();
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
