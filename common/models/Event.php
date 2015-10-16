<?php

namespace common\models;

use Yii;
use common\models\Event_ru;
use common\models\Event_en;
use common\models\Event_photo;
/**
 * This is the model class for table "event".
 *
 * @property integer $id
 * @property integer $author_id
 * @property string $start_timedate
 * @property string $end_timedate
 * @property string $place
 *
 * @property User $author
 * @property EventEn[] $eventEns
 * @property EventPhoto[] $eventPhotos
 * @property EventRu[] $eventRus
 */
class Event extends \yii\db\ActiveRecord
{
    public $images;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['author_id', 'start_timedate', 'end_timedate', 'place'], 'required'],
            [['author_id'], 'integer'],
            [['start_timedate', 'end_timedate'], 'safe'],
            [['place'], 'string', 'max' => 255],
            [['images'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Автор',
            'start_timedate' => 'Начало',
            'end_timedate' => 'Конец',
            'place' => 'Место',
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
    public function getEventEns()
    {
        return $this->hasOne(Event_en::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventPhotos()
    {
        return $this->hasMany(Event_photo::className(), ['event_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEventRus()
    {
        return $this->hasOne(Event_ru::className(), ['event_id' => 'id']);
    }

    public function getEventLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Event_ru::className(), ['event_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Event_en::className(), ['event_id' => 'id']);
    }
    
    public function beforeDelete() {
        $this->deleteImage();
        return parent::beforeDelete();
    }
 
    public function deleteImage() {
        foreach ($this->eventPhotos as $photo) {
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path427320)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$photo->photo_path7070)) unlink($path);
        }
        return true;
    }
}
