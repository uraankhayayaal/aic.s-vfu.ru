<?php

namespace common\models;

use Yii;
use common\models\Mip_ru;
use common\models\Mip_en;
use common\models\Mip_photo;

/**
 * This is the model class for table "mip".
 *
 * @property integer $id
 * @property string $photo_path
 * @property string $photo_path427320
 * @property integer $section_id
 * @property string $created_date
 * @property integer $user_id
 * @property integer $phone
 * @property integer $email
 *
 * @property User $user
 * @property Section $section
 * @property MipEn[] $mipEns
 * @property MipRu[] $mipRus
 */
class Mip extends \yii\db\ActiveRecord
{
    public $images;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_path', 'photo_path427320', 'section_id', 'created_date'], 'required'],
            [['photo_path427320', 'email'], 'string'],
            [['section_id', 'user_id','phone'], 'integer'],
            [['created_date'], 'safe'],
            [['photo_path'], 'string', 'max' => 255],
            [['images'], 'image', 'skipOnEmpty' => true, 'extensions' => 'png, jpg', 'maxFiles' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        if(Yii::$app->language == 'en') return [
            'phone' => 'phone',
            'email' => 'email',          
        ];
        return [
            'id' => 'ID',
            'photo_path' => 'Фото оригинального размера',
            'photo_path427320' => 'фото среднего размера',
            'section_id' => 'Раздел',
            'created_date' => 'Дата основания',
            'user_id' => 'Пользователь (ответственный компании)',
            'images' => 'Фотографии',
            'phone' => 'Телефон',
            'email' => 'Электронная почта',
        ];        
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSection()
    {
        return $this->hasOne(Section::className(), ['id' => 'section_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMipEns()
    {
        return $this->hasOne(Mip_En::className(), ['mip_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMipRus()
    {
        return $this->hasOne(Mip_Ru::className(), ['mip_id' => 'id']);
    }
    public function getMipLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Mip_Ru::className(), ['mip_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Mip_En::className(), ['mip_id' => 'id']);
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
