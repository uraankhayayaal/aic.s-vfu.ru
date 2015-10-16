<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "article_photo".
 *
 * @property integer $id
 * @property integer $article_id
 * @property string $photo_path
 * @property string $photo_path7070
 * @property string $photo_path427320
 * @property string $alt
 *
 * @property Article $article
 */
class Article_photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['article_id', 'photo_path', 'photo_path7070', 'photo_path427320'], 'required'],
            [['article_id'], 'integer'],
            [['photo_path7070', 'photo_path427320', 'alt'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'article_id' => 'Номер новости',
            'photo_path' => 'Фото оригинального размера',
            'photo_path427320' => 'фото среднего размера',
            'photo_path7070' => 'Иконка',
            'alt' => 'Альтернативный текст',
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
