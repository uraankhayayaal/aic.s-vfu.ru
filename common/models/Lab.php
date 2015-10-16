<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lab".
 *
 * @property integer $id
 * @property string $photo_path
 * @property string $photo_path427320
 * @property string $created_date
 * @property integer $user_id
 * @property string $email
 *
 * @property User $user
 * @property LabEn[] $labEns
 * @property LabRu[] $labRus
 */
class Lab extends \yii\db\ActiveRecord
{
    public $images;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lab';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['photo_path', 'photo_path427320', 'created_date', 'email'], 'required'],
            [['photo_path427320'], 'string'],
            [['created_date'], 'safe'],
            [['user_id'], 'integer'],
            [['photo_path', 'email'], 'string', 'max' => 255],
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
            'photo_path' => 'Photo Path',
            'photo_path427320' => 'Photo Path427320',
            'created_date' => 'Created Date',
            'user_id' => 'Автор',
            'images' => 'Фотографии',
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
    public function getLabEns()
    {
        return $this->hasOne(Lab_En::className(), ['lab_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLabRus()
    {
        return $this->hasOne(Lab_Ru::className(), ['lab_id' => 'id']);
    }
    public function getLabLan()
    {
        if(Yii::$app->language == 'ru') return $this->hasOne(Lab_Ru::className(), ['lab_id' => 'id']);
        if(Yii::$app->language == 'en') return $this->hasOne(Lab_En::className(), ['lab_id' => 'id']);
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
