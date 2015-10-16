<?php

use yii\db\Schema;
use yii\db\Migration;

class m151001_061706_labs_tablse extends Migration
{
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lab}}', [
            'id' => Schema::TYPE_PK,
            'photo_path' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_TEXT . ' NOT NULL',
            'section_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_date' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createTable('{{%lab_en}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'company_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'lab_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%lab_ru}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'company_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'lab_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
 
        $this->createIndex('FK_lab_director', '{{%lab}}', 'user_id');
        $this->addForeignKey(
            'FK_lab_director', '{{%lab}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_l', '{{%lab_en}}', 'lab_id');
        $this->addForeignKey(
            'FK_en_l', '{{%lab_en}}', 'lab_id', '{{%lab}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_l', '{{%lab_ru}}', 'lab_id');
        $this->addForeignKey(
            'FK_ru_l', '{{%lab_ru}}', 'lab_id', '{{%lab}}', 'id', 'CASCADE', 'CASCADE'
        );
    }
    
    public function Down()
    {
        $this->dropForeignKey('FK_lab_director', '{{%lab}}');
        $this->dropIndex('FK_lab_director', '{{%lab}}');
        $this->dropForeignKey('FK_en_l', '{{%lab_en}}');
        $this->dropIndex('FK_en_l', '{{%lab_en}}');
        $this->dropForeignKey('FK_ru_l', '{{%lab_ru}}');
        $this->dropIndex('FK_ru_l', '{{%lab_ru}}');   
        
        
        $this->dropTable('{{%lab_ru}}');
        $this->dropTable('{{%lab_en}}');
        $this->dropTable('{{%lab}}');
    }
}
