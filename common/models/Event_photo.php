<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event_photo".
 *
 * @property integer $id
 * @property integer $event_id
 * @property string $photo_path
 * @property string $photo_path7070
 * @property string $photo_path427320
 * @property string $alt
 *
 * @property Event $event
 */
class Event_photo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_photo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['event_id', 'photo_path', 'photo_path7070', 'photo_path427320'], 'required'],
            [['event_id'], 'integer'],
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
            'event_id' => 'Номер события',
            'photo_path' => 'Фото оригинального размера',
            'photo_path427320' => 'фото среднего размера',
            'photo_path7070' => 'Иконка',
            'alt' => 'Альтернативный текст',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id' => 'event_id']);
    }
}
