<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lab_en".
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
class Lab_en extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab_en';
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
            'title' => 'Title',
            'company_name' => 'Company Name',
            'description' => 'Description',
            'content' => 'Content',
            'lab_id' => 'Lab ID',
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
