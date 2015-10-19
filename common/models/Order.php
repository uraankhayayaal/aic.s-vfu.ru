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
 * @property string $is_new
 *
 * @property Agent[] $agents
 */
class Order extends \yii\db\ActiveRecord
{
    public $question = array(
        array('Создание МИП', 'Вопросы по существующим МИП-ам', 'Документация', 'Юридическая помощь', 'Вопросы по недвижимости', 'Конкурсы и гранты', 'Международное сотрудничество', 'Студенческий бизнес-инкубатор "Орех"', 'Центр Интеллектуальной собственности', 'Вопросы руководству'), 
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
            //[['send_at'], 'safe'],
            [['is_new'], 'integer'],
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
            'is_new' => 'Новые заявки'
        ];
        if(Yii::$app->language == 'en') return [
            'id' => 'ID',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'phone' => 'Phone',
            'type' => 'Theme issue',
            'send_at' => 'Send at',
            'text' => 'Message',
            'is_new' => 'New messages',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAgents()
    {
        return $this->hasMany(Agent::className(), ['order_id' => 'id']);
    }
    public function count()
    {
        return Order::find()->where(['is_new' => 0])->count();
    }
}
