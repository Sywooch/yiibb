<?php

use yii\db\Schema;
use app\migrations\linuxforum\Migration;

class m160319_094012_convert_topic_table extends Migration
{
    public $tableName = '{{%topic}}';

    public function up()
    {
        $this->dropColumn($this->tableName, 'id');
        $this->addColumn($this->tableName, 'id', Schema::TYPE_INTEGER . ' FIRST');

        $topics = $this->getLinuxforumTopics();
        $count = sizeof($topics);

        $i = 1;
        foreach ($topics as $topic) {
            if ($topic['updated_at']) {
                $updatedAt = $topic['updated_at'];
            } else {
                $updatedAt = $topic['first_post_created_at'];
            }

            $posts = $this->countPosts($topic['id']);
            if ($posts < 1) {
                echo "The topic #" . $topic['id'] . " haven't posts. Delete.\n";
                $this->execute('DELETE FROM {{%topic}} WHERE id = ' . $topic['id']);
                continue;
            }
            $replies = $posts - 1;
           
            $command = $this->db->createCommand();
            $command->insert($this->tableName, [
                'id' => $topic['id'],
                'forum_id' => $this->getForumId($topic['id']),
                'subject' => $topic['subject'],
                'first_post_id' => $topic['first_post_id'],
                'first_post_username' => $topic['first_post_username'],
                'first_post_created_at' => date('Y-m-d H:i:s', $topic['first_post_created_at']),
                'last_post_id' => $topic['last_post_id'],
                'last_post_username' => $topic['last_post_username'],
                'last_post_created_at' => date('Y-m-d H:i:s', $topic['last_post_created_at']),
                'count_views' => $topic['number_views'],
                'count_replies' => $replies,
                'closed' => $topic['closed'],
                'sticked' => $topic['sticked'],
                'updated_at' => date('Y-m-d H:i:s', $updatedAt),
                'created_at' => date('Y-m-d H:i:s', $topic['first_post_created_at']),
            ])->execute();

            if ($i % 10000 == 0) {
                echo "    > convert topic $i by $count\n";
            }
            $i++;
        }

        $this->execute('ALTER TABLE ' . $this->tableName . ' ADD PRIMARY KEY(`id`)');
        $this->execute('ALTER TABLE ' . $this->tableName . ' AUTO_INCREMENT = ' . $this->getMaxId());
        $this->execute('ALTER TABLE ' . $this->tableName . ' CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');

        $this->execute('DELETE FROM {{%post}} WHERE topic_id NOT IN (SELECT t.id FROM {{%topic}} t)');
    }
    
    private function getMaxId()
    {
        $sql = 'SELECT MAX(id) FROM topic';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryScalar();
    }

    private function getForumId($id)
    {
        $sql = 'SELECT tag_name FROM tag_topic_assignment WHERE topic_id=:id';
        $query = $this->linuxforumDb->createCommand($sql);
        $query->bindParam(':id', $id);
        $tag = $query->queryScalar();

        $mapping = [
            'administration' => 20,
            'alt_linux' => 12,
            'arch' => 8,
            'article' => 27,
            'books' => 15,
            'centos' => 6,
            'command_line' => 25,
            'common' => 2,
            'debian' => 4,
            'dm' => 16,
            'fedora' => 6,
            'freebsd' => 14,
            'games' => 23,
            'gentoo' => 10,
            'hardware' => 21,
            'job' => 30,
            'kernel' => 26,
            'mageia' => 7,
            'mandriva' => 11,
            'mint' => 3,
            'multimedia' => 22,
            'news' => 1,
            'noise' => 28,
            'opensuse' => 5,
            'other_linux' => 13,
            'pictures' => 29,
            'programming' => 24,
            'red_hat' => 6,
            'rosa' => 11,
            'slackware' => 9,
            'software' => 17,
            'support' => 31,
            'suse' => 5,
            'ubuntu' => 3,
            'virtualization' => 19,
            'wine' => 18,
            'wm' => 16,
        ];

        if (isset($mapping[$tag])) {
            return $mapping[$tag];
        }

        return 28;
    }

    private function getLinuxforumTopics()
    {
        $sql = 'SELECT * FROM topic';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryAll();
    }

    private function countPosts($id)
    {
        $sql = 'SELECT COUNT(*) FROM post WHERE topic_id=:id';
        $query = $this->linuxforumDb->createCommand($sql);
        $query->bindParam(':id', $id);
        $count = $query->queryScalar();

        return $count;
    }

    public function down()
    {
        $this->truncateTable($this->tableName);
    }
}
