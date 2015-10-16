<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "setting_ru".
 *
 * @property integer $id
 * @property string $index
 * @property integer $setting_id
 *
 * @property Setting $setting
 */
class Setting_ru extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting_ru';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['index', 'setting_id'], 'required'],
            [['setting_id'], 'integer'],
            [['index'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'index' => 'Русское значение',
            'setting_id' => 'Setting ID',            
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSetting()
    {
        return $this->hasOne(Setting::className(), ['id' => 'setting_id']);
    }
}
