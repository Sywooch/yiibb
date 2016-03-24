<?php

use app\migrations\linuxforum\Migration;

class m160319_094018_convert_forum_table extends Migration
{
    public function up()
    {
        $categories = [
            1 => [
                'Новости',
            ],
            2 => [
                'Общие вопросы',
            ],
            3 => [
                'Ubuntu, Linux Mint',
                'Debian GNU/Linux',
                'openSUSE и SUSE Linux Enterprise',
                'Red Hat Linux, Fedora, CentOS',
                'Mageia Linux',
                'Arch Linux',
                'Slackware Linux',
                'Gentoo Linux',
                'Mandriva Linux, ROSA',
                'ALT Linux',
                'Другие Linux-ы и Unix-ы',
                'Free и другие BSD',
            ],
            4 => [
                'Книги и документация',
                'Графические окружения и оконные менеджеры',
                'Программное обеспечение',
                'WINE',
                'Виртуализация',
                'Администрирование и настройка сетей',
                'Комплектующие, оборудование и устройства',
                'Мультимедиа в Linux',
                'Игры',
            ],
            5 => [
                'Программирование',
                'Работа в командной строке',
                'Linux Kernel',
            ],
            6 => [
                'Проекты пользователей LinuxForum',
            ],
            7 => [
                'Разговоры о Linux и не только',
                'Жизнь в картинках',
                'Работа',
                'Техподдержка LinuxForum',
                'Тестовый',
            ],
        ];

        $forumId = 1;
        foreach ($categories as $category => $forums) {
            $count = 1;

            foreach ($forums as $forum) {
                $countTopics = $this->countTopics($forumId);
                $countPosts = $this->countPosts($forumId);
                $lastTopic = $this->findLastTopic($forumId);

                $this->insert('{{%forum}}', [
                    'name' => $forum,
                    'position' => $count++,
                    'category_id' => $category,
                    'count_topics' => $countTopics,
                    'count_posts' => $countPosts - $countTopics,
                    'last_post_username' => $lastTopic['last_post_username'],
                    'last_post_created_at' => $lastTopic['last_post_created_at'],
                    'status_id' => 1,
                    'updated_at' => date('Y-m-d H:i:s', time()),
                    'created_at' => date('Y-m-d H:i:s', time()),
                ]);
                ++$forumId;
            }
        }
    }

    private function findLastTopic($id)
    {
        $sql = 'SELECT * FROM topic WHERE forum_id = :id ORDER BY last_post_created_at DESC LIMIT 1';
        $query = $this->db->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryOne();
    }

    private function countTopics($id)
    {
        $sql = 'SELECT COUNT(*) FROM topic WHERE forum_id=:id';
        $query = $this->db->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryScalar();
    }

    private function countPosts($id)
    {
        $sql = 'SELECT COUNT(*) 
                    FROM `topic`
                    RIGHT JOIN post
                        ON post.topic_id = topic.id
                    WHERE topic.forum_id = :id';

        $query = $this->db->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryScalar();
    }

    public function down()
    {
        $this->truncateTable('{{%forum}}');
    }
}
