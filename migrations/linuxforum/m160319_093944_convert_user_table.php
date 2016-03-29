<?php

use yii\db\Schema;
use app\migrations\linuxforum\Migration;

class m160319_093944_convert_user_table extends Migration
{
    public $tableName = '{{%user}}';

    public function up()
    {
        // Убираем дубли username
        $this->linuxforumDb
            ->createCommand('CREATE TEMPORARY TABLE IF NOT EXISTS temp_table(id int(10)) ENGINE=MEMORY')
            ->execute();
        $this->linuxforumDb
            ->createCommand('TRUNCATE TABLE temp_table')
            ->execute();
        $this->linuxforumDb
            ->createCommand('INSERT INTO `temp_table` (SELECT MIN(id) as id FROM user GROUP BY username)')
            ->execute();
        $this->linuxforumDb
            ->createCommand('DELETE FROM user WHERE id NOT IN (SELECT id FROM temp_table)')
            ->execute();

        $this->dropColumn('{{%user}}', 'id');
        $this->addColumn('{{%user}}', 'id', Schema::TYPE_INTEGER . ' first');

        $users = $this->getUsers();
        $count = sizeof($users);

        $i = 1;
        foreach ($users as $user) {
            if ($user['auth_key'] == '0') {
                continue;
            }

            $punUser = $this->getPunUser($user['id']);

            $this->db->createCommand()
                ->insert($this->tableName, [
                    'id' => $user['id'],
                    'role' => $user['role'],
                    'auth_key' => $user['auth_key'],
                    'password_hash' => $user['password_hash'],
                    'password_change_token' => $user['password_change_token'],
                    'password_changed_at' => null,
                    'first_name' => $punUser['realname'],
                    'username' => $user['username'],
                    'email' => $user['email'],
                    'email_activated' => $user['email_status'],
                    'title' => $punUser['title'],
                    'reputation_enable' => $punUser['rep_enable'],
                    'reputation_minus' => $punUser['rep_minus'],
                    'reputation_plus' => $punUser['rep_plus'],
                    'last_post_id' => '',
                    'count_posts' => '',
                    'language' => '',
                    'timezone' => $user['timezone'],
                    'signature' => '',
                    'show_signature' => '',
                    'status_id' => true,
                    'updated_at' => date('Y-m-d H:i:s', $user['created_at']),
                    'created_at' => date('Y-m-d H:i:s', $user['created_at']),
                ])->execute();

            if ($i % 10000 == 0) {
                echo "    > convert user $i by $count\n";
            }
            $i++;
        }

        $this->execute('ALTER TABLE ' . $this->tableName . ' ADD PRIMARY KEY(`id`)');
        $this->execute('ALTER TABLE ' . $this->tableName . ' AUTO_INCREMENT = ' . $this->getMaxId());
        $this->execute('ALTER TABLE ' . $this->tableName . ' CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;');
    }

    private function getMaxId()
    {
        $sql = 'SELECT MAX(id) FROM user';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryScalar();
    }

    private function getPunUser($id)
    {
        $sql = 'SELECT * FROM users WHERE id=:id';
        $query = $this->punDb->createCommand($sql);
        $query->bindParam(':id', $id);
        return $query->queryOne();
    }

    private function getUsers()
    {
        $sql = 'SELECT * FROM user';
        $query = $this->linuxforumDb->createCommand($sql);
        return $query->queryAll();
    }

    public function down()
    {
        $this->truncateTable($this->tableName);
    }
}
