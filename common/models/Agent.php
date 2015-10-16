<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "agent".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $order_id
 * @property string $question
 *
 * @property Order $order
 * @property User $user
 */
class Agent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agent';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'order_id'], 'required'],
            [['user_id', 'order_id'], 'integer'],
            [['question'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        if(Yii::$app->language == 'ru') return [
            'id' => 'ID',
            'user_id' => 'Номер пользователя',
            'order_id' => 'Номер Заявки',
            'question' => 'Вопрос',
        ];
        if(Yii::$app->language == 'en') return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'order_id' => 'Order ID',
            'question' => 'Question',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Order::className(), ['id' => 'order_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
