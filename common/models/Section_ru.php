<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "section_ru".
 *
 * @property integer $id
 * @property string $section_name
 * @property string $description
 * @property integer $section_id
 *
 * @property Section $section
 */
class Section_ru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section_ru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['section_name', 'description', 'section_id'], 'required'],
            [['description'], 'string'],
            [['section_id'], 'integer'],
            [['section_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'section_name' => 'Название раздела',
            'description' => 'Описание',
            'section_id' => 'Раздел',            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }
}
