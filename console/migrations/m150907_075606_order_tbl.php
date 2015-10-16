<?php

use yii\db\Schema;
use yii\db\Migration;

class m150907_075606_order_tbl extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%order}}', [
            'id' => Schema::TYPE_PK,
            'first_name' => Schema::TYPE_STRING . ' NOT NULL',
            'last_name' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'phone' => Schema::TYPE_STRING,
            'IsRss' => Schema::TYPE_STRING,
            'text' => Schema::TYPE_TEXT,
            'send_at' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%agent}}', [
            'id' => Schema::TYPE_PK,
            'user_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'order_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'question' => Schema::TYPE_STRING,
        ], $tableOptions);

        $this->createIndex('FK_order_agent', '{{%agent}}', 'order_id');
        $this->addForeignKey(
            'FK_order_agent', '{{%agent}}', 'order_id', '{{%order}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_user_agent', '{{%agent}}', 'user_id');
        $this->addForeignKey(
            'FK_user_agent', '{{%agent}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );
    }

    public function down()
    {
        $this->dropForeignKey('FK_order_agent', '{{%agent}}');
        $this->dropIndex('FK_order_agent', '{{%agent}}');
        $this->dropForeignKey('FK_user_agent', '{{%agent}}');
        $this->dropIndex('FK_user_agent', '{{%agent}}');
        $this->dropTable('{{%order}}');
    }
}
