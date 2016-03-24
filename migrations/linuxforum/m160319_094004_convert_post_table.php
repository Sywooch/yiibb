<?php

use yii\db\Schema;
use app\migrations\linuxforum\Migration;

class m160319_094004_convert_post_table extends Migration
{
    public $tableName = '{{%post}}';

    public function up()
    {
        $this->dropColumn('{{%post}}', 'id');
        $this->addColumn('{{%post}}', 'id', Schema::TYPE_INTEGER . ' first');

        $posts = $this->getPosts();
        $count = sizeof($posts);

        $i = 1;
        foreach ($posts as $post) {
            $this->db->createCommand()
                ->insert($this->tableName, [
                    'id' => $post['id'],
                    'topic_id' => $post['topic_id'],
                    'user_id' => $post['user_id'],
                    'user_ip' => $post['user_ip'],
                    'text' => $post['message'],

                    'updated_at' => date('Y-m-d H:i:s', $post['created_at']),
                    'created_at' => date('Y-m-d H:i:s', $post['created_at']),
                ])->execute();

            if ($i % 10000 == 0) {
                echo "    > convert post $i by $count\n";
            }
            $i++;
        }

        $this->execute('ALTER TABLE ' . $this->tableName . ' ADD PRIMARY KEY(`id`)');
        $this->execute('ALTER TABLE ' . $this->tableName . ' AUTO_INCREMENT = ' . $this->getMaxId());
        $this->execute('ALTER TABLE ' . $this->tableName . ' CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
    }

    private function getMaxId()
    {
        $sql = 'SELECT MAX(id) FROM post';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryScalar();
    }

    private function getPosts()
    {
        $sql = 'SELECT * FROM post';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryAll();
    }

    public function down()
    {
        $this->truncateTable('{{%post}}');
    }
}
