<?php

namespace common\models;

use Yii;
use common\models\Article_ru;
use common\models\Article_en;
use common\models\Article_photo;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $date_time
 * @property integer $author_id
 *
 * @property User $author
 * @property ArticleEn[] $articleEns
 * @property ArticlePhoto[] $articlePhotos
 * @property ArticleRu[] $articleRus
 */
class Article extends \yii\db\ActiveRecord
{
    public $images;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_time', 'author_id'], 'required'],
            [['date_time'], 'safe'],
            [['author_id'], 'integer'],
            [['images'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 3],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_time' => 'Дата публикации',
            'author_id' => 'Автор',
            'images' => 'Фотографии',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::className(), ['id' => 'author_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleEns()
    {
        return $this->hasOne(Article_En::className(), ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticlePhotos()
    {
        return $this->hasMany(Article_Photo::className(), ['article_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticleRus()
    {
        return $this->hasOne(Article_Ru::className(), ['article_id' => 'id']);
    }
    public function getArticleLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Article_Ru::className(), ['article_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Article_En::className(), ['article_id' => 'id']);
    }
    public function beforeDelete() {
        $this->deleteImage();
        return parent::beforeDelete();
    }
 
    public function deleteImage() {
        foreach ($this->articlePhotos as $photo) {
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path427320)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path7070)) unlink($path);
        }
        return true;
    }
}
