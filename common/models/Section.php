<?php

namespace common\models;
use common\models\Section_ru;
use common\models\Section_en;
use common\models\Section_photo;

use Yii;

/**
 * This is the model class for table "section".
 *
 * @property integer $id
 * @property string $photo_path
 * @property string $photo_path427320
 *
 * @property Mip[] $mips
 * @property SectionEn[] $sectionEns
 * @property SectionRu[] $sectionRus
 */
class Section extends \yii\db\ActiveRecord
{
    public $images;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'section';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_path', 'photo_path427320'], 'required'],
            [['photo_path', 'photo_path427320'], 'string'],
            [['images'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'photo_path' => 'Фото оригинального размера',
            'photo_path427320' => 'фото среднего размера',   
            'images' => 'Фотографии'         
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMips()
    {
        return $this->hasMany(Mip::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionEns()
    {
        return $this->hasOne(Section_En::className(), ['section_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSectionRus()
    {
        return $this->hasOne(Section_Ru::className(), ['section_id' => 'id']);
    }
    public function getSectionLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Section_Ru::className(), ['section_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Section_En::className(), ['section_id' => 'id']);
    }
    public function beforeDelete() {
        $this->deleteImage();
        return parent::beforeDelete();
    }
 
    public function deleteImage() {
        
            if(file_exists($path = getcwd().'\..\..'.$this->photo_path)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$this->photo_path427320)) unlink($path);
        return true;
    }
}
