<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Спасибо';
if(Yii::$app->language == 'en')
$this->title = 'Thanks';
?><div style="height:500px; text-align: center; padding-top:10%;">
<?php
if(Yii::$app->language == 'ru') echo '<h3>Спасибо, ваша заявка принята. В скором времени наш сотрудник свяжется с вами.</h3>';
if(Yii::$app->language == 'en') echo '<h3>Thank you, your application is accepted. Soon, our staff will contact you.</h3>';
?>
</div>