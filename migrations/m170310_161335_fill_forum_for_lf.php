<?php

use yii\db\Migration;

class m170310_161335_fill_forum_for_lf extends Migration
{
    public function up()
    {
        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Новости',
            'position' => $count++,
            'category_id' => 1,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Общие вопросы',
            'position' => $count++,
            'category_id' => 2,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Ubuntu, Linux Mint',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Debian GNU/Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'openSUSE и SUSE Linux Enterprise',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Red Hat Linux, Fedora, CentOS',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Mageia Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Arch Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Slackware Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Gentoo Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Mandriva Linux, ROSA',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'ALT Linux',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Другие Linux-ы и Unix-ы',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Free и другие BSD',
            'position' => $count++,
            'category_id' => 3,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Книги и документация',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Графические окружения и оконные менеджеры',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Программное обеспечение',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'WINE',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Виртуализация',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Администрирование и настройка сетей',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Комплектующие, оборудование и устройства',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Мультимедиа в Linux',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Игры',
            'position' => $count++,
            'category_id' => 4,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Программирование',
            'position' => $count++,
            'category_id' => 5,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Работа в командной строке',
            'position' => $count++,
            'category_id' => 5,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Linux Kernel',
            'position' => $count++,
            'category_id' => 5,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Проекты пользователей LinuxForum',
            'position' => $count++,
            'category_id' => 6,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);

        $count = 1;
        $this->insert('{{%forum}}', [
            'name' => 'Разговоры о Linux и не только',
            'position' => $count++,
            'category_id' => 7,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Жизнь в картинках',
            'position' => $count++,
            'category_id' => 7,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        $this->insert('{{%forum}}', [
            'name' => 'Техподдержка LinuxForum',
            'position' => $count++,
            'category_id' => 7,
            'status_id' => 1,
            'updated_at' => date('Y-m-d H:i:s', time()),
            'created_at' => date('Y-m-d H:i:s', time()),
        ]);
        unset($count);
    }

    public function down()
    {
        $this->truncateTable('{{%forum}}');
    }
}
