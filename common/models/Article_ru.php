<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article_ru".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property integer $publish_status
 * @property integer $like
 * @property integer $visited
 * @property integer $article_id
 *
 * @property Article $article
 */
class Article_ru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_ru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'publish_status', 'like', 'visited', 'article_id'], 'required'],
            [['description', 'content'], 'string'],
            [['publish_status', 'like', 'visited', 'article_id'], 'integer'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'content' => 'Содержание',
            'publish_status' => 'Опубликован',
            'like' => 'Нравится',
            'visited' => 'Просмотров',
            'article_id' => 'Номер новости',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticle()
    {
        return $this->hasOne(Article::className(), ['id' => 'article_id']);
    }
}
