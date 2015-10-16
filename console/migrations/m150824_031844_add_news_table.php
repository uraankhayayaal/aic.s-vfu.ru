<?php

use yii\db\Schema;
use yii\db\Migration;

class m150824_031844_add_news_table extends Migration
{
        
    // Use safeUp/safeDown to run migration code within a transaction
    public function Up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'username' => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key' => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
            'password_reset_token' => Schema::TYPE_STRING,
            'email' => Schema::TYPE_STRING . ' NOT NULL',

            'status' => Schema::TYPE_SMALLINT . ' NOT NULL DEFAULT 10',
            'created_at' => Schema::TYPE_INTEGER . ' NOT NULL',
            'updated_at' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%article}}', [
            'id' => Schema::TYPE_PK,
            'date_time' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%article_en}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'publish_status' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'like' => Schema::TYPE_INTEGER . ' NOT NULL',
            'visited' => Schema::TYPE_INTEGER . ' NOT NULL',
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%article_ru}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'publish_status' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'like' => Schema::TYPE_INTEGER . ' NOT NULL',
            'visited' => Schema::TYPE_INTEGER . ' NOT NULL',
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
 
        $this->createTable('{{%event}}', [
            'id' => Schema::TYPE_PK,
            'author_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'start_timedate' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'end_timedate' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'place' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%event_en}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'publish_status' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'like' => Schema::TYPE_INTEGER . ' NOT NULL',
            'visited' => Schema::TYPE_INTEGER . ' NOT NULL',
            'event_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%event_ru}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'publish_status' => Schema::TYPE_BOOLEAN . ' NOT NULL',
            'like' => Schema::TYPE_INTEGER . ' NOT NULL',
            'visited' => Schema::TYPE_INTEGER . ' NOT NULL',
            'event_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%event_photo}}', [
            'id' => Schema::TYPE_PK,
            'event_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'photo_path7070' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_STRING . ' NOT NULL',
            'alt' => Schema::TYPE_STRING,
        ], $tableOptions);

        $this->createTable('{{%article_photo}}', [
            'id' => Schema::TYPE_PK,
            'article_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'photo_path7070' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_STRING . ' NOT NULL',
            'alt' => Schema::TYPE_STRING,
        ], $tableOptions);

        $this->createTable('{{%mip}}', [
            'id' => Schema::TYPE_PK,
            'photo_path' => Schema::TYPE_STRING . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_TEXT . ' NOT NULL',
            'section_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'created_date' => Schema::TYPE_TIMESTAMP . ' NOT NULL',
            'user_id' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createTable('{{%mip_en}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'company_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'mip_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%mip_ru}}', [
            'id' => Schema::TYPE_PK,
            'title' => Schema::TYPE_STRING . ' NOT NULL',
            'company_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_STRING . ' NOT NULL',
            'content' => Schema::TYPE_TEXT . ' NOT NULL',
            'mip_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%section}}', [
            'id' => Schema::TYPE_PK,
            'photo_path' => Schema::TYPE_TEXT . ' NOT NULL',
            'photo_path427320' => Schema::TYPE_TEXT . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%section_en}}', [
            'id' => Schema::TYPE_PK,
            'section_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'section_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%section_ru}}', [
            'id' => Schema::TYPE_PK,
            'section_name' => Schema::TYPE_STRING . ' NOT NULL',
            'description' => Schema::TYPE_TEXT . ' NOT NULL',
            'section_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%setting}}', [
            'id' => Schema::TYPE_PK,
            'key' => Schema::TYPE_STRING . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%setting_en}}', [
            'id' => Schema::TYPE_PK,
            'index' => Schema::TYPE_TEXT . ' NOT NULL',
            'setting_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);

        $this->createTable('{{%setting_ru}}', [
            'id' => Schema::TYPE_PK,
            'index' => Schema::TYPE_TEXT . ' NOT NULL',
            'setting_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ], $tableOptions);
 
        $this->createIndex('FK_article_author', '{{%article}}', 'author_id');
        $this->addForeignKey(
            'FK_article_author', '{{%article}}', 'author_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_a', '{{%article_en}}', 'article_id');
        $this->addForeignKey(
            'FK_en_a', '{{%article_en}}', 'article_id', '{{%article}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_a', '{{%article_ru}}', 'article_id');
        $this->addForeignKey(
            'FK_ru_a', '{{%article_ru}}', 'article_id', '{{%article}}', 'id', 'CASCADE', 'CASCADE'
        );
 
        $this->createIndex('FK_event_author', '{{%event}}', 'author_id');
        $this->addForeignKey(
            'FK_event_author', '{{%event}}', 'author_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_e', '{{%event_en}}', 'event_id');
        $this->addForeignKey(
            'FK_en_e', '{{%event_en}}', 'event_id', '{{%event}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_e', '{{%event_ru}}', 'event_id');
        $this->addForeignKey(
            'FK_ru_e', '{{%event_ru}}', 'event_id', '{{%event}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_article_photo', '{{%article_photo}}', 'article_id');
        $this->addForeignKey(
            'FK_article_photo', '{{%article_photo}}', 'article_id', '{{%article}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_event_photo', '{{%event_photo}}', 'event_id');
        $this->addForeignKey(
            'FK_event_photo', '{{%event_photo}}', 'event_id', '{{%event}}', 'id', 'CASCADE', 'CASCADE'
        );
 
        $this->createIndex('FK_mip_section', '{{%mip}}', 'section_id');
        $this->addForeignKey(
            'FK_mip_section', '{{%mip}}', 'section_id', '{{%section}}', 'id', 'CASCADE', 'CASCADE'
        );
 
        $this->createIndex('FK_mip_director', '{{%mip}}', 'user_id');
        $this->addForeignKey(
            'FK_mip_director', '{{%mip}}', 'user_id', '{{%user}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_m', '{{%mip_en}}', 'mip_id');
        $this->addForeignKey(
            'FK_en_m', '{{%mip_en}}', 'mip_id', '{{%mip}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_m', '{{%mip_ru}}', 'mip_id');
        $this->addForeignKey(
            'FK_ru_m', '{{%mip_ru}}', 'mip_id', '{{%mip}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_s', '{{%section_en}}', 'section_id');
        $this->addForeignKey(
            'FK_en_s', '{{%section_en}}', 'section_id', '{{%section}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_s', '{{%section_ru}}', 'section_id');
        $this->addForeignKey(
            'FK_ru_s', '{{%section_ru}}', 'section_id', '{{%section}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_en_set', '{{%setting_en}}', 'setting_id');
        $this->addForeignKey(
            'FK_en_set', '{{%setting_en}}', 'setting_id', '{{%setting}}', 'id', 'CASCADE', 'CASCADE'
        );

        $this->createIndex('FK_ru_set', '{{%setting_ru}}', 'setting_id');
        $this->addForeignKey(
            'FK_ru_set', '{{%setting_ru}}', 'setting_id', '{{%setting}}', 'id', 'CASCADE', 'CASCADE'
        );
    }
    
    public function Down()
    {
        $this->dropForeignKey('FK_article_author', '{{%article}}');
        $this->dropIndex('FK_article_author', '{{%article}}');
        $this->dropForeignKey('FK_en_a', '{{%article_en}}');
        $this->dropIndex('FK_en_a', '{{%article_en}}');
        $this->dropForeignKey('FK_ru_a', '{{%article_ru}}');
        $this->dropIndex('FK_ru_a', '{{%article_ru}}');
        $this->dropForeignKey('FK_event_author', '{{%event}}');
        $this->dropIndex('FK_event_author', '{{%event}}');
        $this->dropForeignKey('FK_en_e', '{{%event_en}}');
        $this->dropIndex('FK_en_e', '{{%event_en}}');
        $this->dropForeignKey('FK_ru_e', '{{%event_ru}}');
        $this->dropIndex('FK_ru_e', '{{%event_ru}}');
        $this->dropForeignKey('FK_article_photo', '{{%article_photo}}');
        $this->dropIndex('FK_article_photo', '{{%article_photo}}');
        $this->dropForeignKey('FK_event_photo', '{{%event_photo}}');
        $this->dropIndex('FK_event_photo', '{{%event_photo}}');
        $this->dropForeignKey('FK_mip_section', '{{%mip}}');
        $this->dropIndex('FK_mip_section', '{{%mip}}');
        $this->dropForeignKey('FK_mip_director', '{{%mip}}');
        $this->dropIndex('FK_mip_director', '{{%mip}}');
        $this->dropForeignKey('FK_en_m', '{{%mip_en}}');
        $this->dropIndex('FK_en_m', '{{%mip_en}}');
        $this->dropForeignKey('FK_ru_m', '{{%mip_ru}}');
        $this->dropIndex('FK_ru_m', '{{%mip_ru}}');
        $this->dropForeignKey('FK_en_s', '{{%section_en}}');
        $this->dropIndex('FK_en_s', '{{%section_en}}');
        $this->dropForeignKey('FK_ru_s', '{{%section_ru}}');
        $this->dropIndex('FK_ru_s', '{{%section_ru}}');
        $this->dropForeignKey('FK_en_set', '{{%setting_en}}');
        $this->dropIndex('FK_en_set', '{{%setting_en}}');
        $this->dropForeignKey('FK_ru_set', '{{%setting_ru}}');
        $this->dropIndex('FK_ru_set', '{{%setting_ru}}');        
        
        $this->dropTable('{{%setting_en}}');
        $this->dropTable('{{%setting_ru}}');
        $this->dropTable('{{%setting}}');
        $this->dropTable('{{%mip_ru}}');
        $this->dropTable('{{%mip_en}}');
        $this->dropTable('{{%mip}}');
        $this->dropTable('{{%section_ru}}');
        $this->dropTable('{{%section_en}}');
        $this->dropTable('{{%section}}');
        $this->dropTable('{{%article_photo}}');
        $this->dropTable('{{%event_photo}}');
        $this->dropTable('{{%article_ru}}');
        $this->dropTable('{{%article_en}}');
        $this->dropTable('{{%article}}');
        $this->dropTable('{{%event_ru}}');
        $this->dropTable('{{%event_en}}');
        $this->dropTable('{{%event}}');
        $this->dropTable('{{%user}}');
    }
    
}
