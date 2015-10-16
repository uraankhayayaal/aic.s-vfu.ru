<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lab_ru".
 *
 * @property integer $id
 * @property string $title
 * @property string $company_name
 * @property string $description
 * @property string $content
 * @property integer $lab_id
 *
 * @property Lab $lab
 */
class Lab_ru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_ru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'company_name', 'description', 'content', 'lab_id'], 'required'],
            [['content'], 'string'],
            [['lab_id'], 'integer'],
            [['title', 'company_name', 'description'], 'string', 'max' => 255]
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
            'company_name' => 'Название Лаборатории',
            'description' => 'Директор',
            'content' => 'Краткое описание',
            'lab_id' => 'Номер лаборатории',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLab()
    {
        return $this->hasOne(Lab::className(), ['id' => 'lab_id']);
    }
}
