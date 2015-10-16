<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $text
 * @property integer $type//type og question
 * @property string $send_at
 *
 * @property Agent[] $agents
 */
class Order extends \yii\db\ActiveRecord
{
    public $question = array(
        array('Создание МИП', 'Вопросы по существующим МИП-ам', 'Документация', 'Юридическая помощь', 'Вопросы по недвижимости', 'Конкурсы и гранты', 'Международное сотрудничество'), 
        array('Сreate a innovative company', 'About actual innovative company', 'Documentation')
    );
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['first_name', 'email', 'send_at'], 'required'],
            [['send_at'], 'safe'],
            [['first_name', 'last_name', 'email', 'phone', 'text', 'type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        
        if(Yii::$app->language == 'ru') return [
            'id' => 'ID',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'email' => 'электронная почта',
            'phone' => 'Номер телефона',
            'type' => 'Тема',
            'send_at' => 'Дата заполнения',
            'text' => 'Сообщение',
        ];
        if(Yii::$app->language == 'en') return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'type' => 'Theme issue',
            'send_at' => 'Send At',
            'text' => 'Message',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgents()
    {
        return $this->hasMany(Agent::className(), ['order_id' => 'id']);
    }
}
