<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "event_en".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $content
 * @property integer $publish_status
 * @property integer $like
 * @property integer $visited
 * @property integer $event_id
 *
 * @property Event $event
 */
class Event_en extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'event_en';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description', 'content', 'publish_status', 'like', 'visited', 'event_id'], 'required'],
            [['description', 'content'], 'string'],
            [['publish_status', 'like', 'visited', 'event_id'], 'integer'],
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
            'event_id' => 'Номер события',
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
