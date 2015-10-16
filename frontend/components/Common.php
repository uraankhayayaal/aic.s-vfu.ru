<?php
namespace frontend\components;

use yii\base\Component;

class Common extends Component{

	public static function sendMail($email, $subject, $body, $name=''){
		\Yii::$app->mail->compose()
		    ->setFrom([ \Yii::$app->params['supportEmail'] => \Yii::$app->name])
		    ->setTo([$email => $name])
		    ->setSubject($subject)
		    ->setTextBody($text)
		    ->send();
 	}
}
?>