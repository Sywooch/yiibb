<?php

use app\migrations\linuxforum\Migration;

class m160327_041729_fill_user_table extends Migration
{
    public function up()
    {
        $sql = 'SELECT * FROM {{%user}}';
        $query = $this->linuxforumDb->createCommand($sql);
        $users = $query->queryAll();
        $count = sizeof($users);

        $i = 1;
        foreach ($users as $user) {
            $this->update('{{%user}}', [
                'count_posts' => $this->countPosts($user['id']),
                'last_post_id' => $this->getLastPostId($user['id']),
            ], ['id' => $user['id']]);

            if ($i % 1000 == 0) {
                echo "    > update user $i by $count\n";
            }
            $i++;
        }
    }

    private function getLastPostId($id)
    {
        $sql = 'SELECT id FROM post WHERE user_id = :id ORDER BY created_at DESC LIMIT 1';
        $query = $this->db->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryScalar();
    }

    private function countPosts($id)
    {
        $sql = 'SELECT COUNT(*) FROM post WHERE user_id=:id';
        $query = $this->db->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryScalar();
    }
}
