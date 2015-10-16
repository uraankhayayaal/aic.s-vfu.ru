<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $body;
    public $ok;
    //public $verifyCode;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone', 'subject', 'body'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
            ['ok', 'string']
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        if(Yii::$app->language == 'ru') return [
            //'verifyCode' => 'Verification Code',
            'name' => 'Имя',
            'email' => 'Электронная почта',
            'phone' => 'Телефон',
            'subject' => 'Где учишься?',
            'body' => 'Кратко опиши свою идею',
            'ok' => 'Отправить',
        ];
        if(Yii::$app->language == 'en') return [
            //'verifyCode' => 'Verification Code',
            'name' => 'name',
            'email' => 'email',
            'phone' => 'phone',
            'subject' => 'What faculty are you from?',
            'body' => 'What is your Idie?',
            'ok' => 'Send',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     *
     * @param  string  $email the target email address
     * @return boolean whether the email was sent
     */
    public function sendEmail($email)
    {
        return Yii::$app->mailer->compose()
            ->setTo($email)
            ->setFrom([$this->email => $this->name])
            ->setSubject($this->subject)
            ->setTextBody($this->body.'<br>'.$this->phone)
            ->send();
    }
}
