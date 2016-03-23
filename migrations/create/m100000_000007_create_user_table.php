<?php

use yii\db\Migration;

class m100000_000007_create_user_table extends Migration
{
    public $tableName = '{{%user}}';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'role' => $this->string(64)->notNull(),
            'auth_key' => $this->string(32)->notNull(),
            'username' => $this->string(40)->notNull(),
            'email' => $this->string(255)->notNull(),
            'email_activated' => $this->boolean()->defaultValue(false),
            'email_activate_send_at' => $this->timestamp(),
            'password_hash' => $this->string(60)->notNull(),
            'password_change_token' => $this->string(32),
            'password_changed_at' => $this->timestamp(),
            'first_name' => $this->string(40),
            'middle_name' => $this->string(40),
            'last_name' => $this->string(40),
            'title' => $this->string(50),
            'reputation_enable' => $this->boolean(),
            'reputation_minus' => $this->integer(),
            'reputation_plus' => $this->integer(),
            'last_post_id' => $this->integer(),
            'count_posts' => $this->integer(),
            'language' => $this->string(10),
            'timezone' => $this->string(255),
            'signature' => $this->text(),
            'show_signature' => $this->boolean(),
            'status_id' => $this->boolean()->notNull()->defaultValue(true),
            'updated_at' => $this->timestamp()->notNull(),
            'created_at' => $this->timestamp()->notNull(),
        ], $tableOptions);

        $this->createIndex('idx-user-username', $this->tableName, 'username', true);
        $this->createIndex('idx-user-email', $this->tableName, 'email', true);
    }

    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
