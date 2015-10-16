<?php

namespace common\models;
use common\models\Setting_ru;
use common\models\Setting_en;
use common\models\Setting_photo;

use Yii;

/**
 * This is the model class for table "setting".
 *
 * @property integer $id
 * @property string $key
 * @property string $page
 *
 * @property SettingEn[] $settingEns
 * @property SettingRu[] $settingRus
 */
class Setting extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'setting';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['key'], 'required'],
            [['key', 'page'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'key' => 'Ключ',        
            'page' => 'Страница',        
        ];

    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingEns()
    {
        return $this->hasOne(Setting_En::className(), ['setting_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSettingRus()
    {
        return $this->hasOne(Setting_Ru::className(), ['setting_id' => 'id']);
    }
    public function getSettingLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Setting_Ru::className(), ['setting_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Setting_En::className(), ['setting_id' => 'id']);
    }
}
