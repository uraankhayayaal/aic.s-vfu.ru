<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mip_en".
 *
 * @property integer $id
 * @property string $title
 * @property string $company_name
 * @property string $description
 * @property string $content
 * @property integer $mip_id
 * @property integer $page
 *
 * @property Mip $mip
 */
class Mip_en extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mip_en';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'company_name', 'description', 'content', 'mip_id'], 'required'],
            [['content', 'page'], 'string'],
            [['mip_id'], 'integer'],
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
            'company_name' => 'Название компании',
            'description' => 'Директор',
            'content' => 'Краткое описание',
            'mip_id' => 'Номер МИП',
            'page' => 'Страница МИП',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMip()
    {
        return $this->hasOne(Mip::className(), ['id' => 'mip_id']);
    }
}
