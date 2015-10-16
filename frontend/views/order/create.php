<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Order */


if(Yii::$app->language == 'ru')
$this->title = 'Пишите нам';
if(Yii::$app->language == 'en')
$this->title = 'Fill the blank';
?>
<div class="row">	
<div class="col-4 mox-left align-top">

    <h2 class="head1"><?= Html::encode($this->title) ?></h2>
	
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<div class="col-4 mox-left align-top">
<?php
if(Yii::$app->language == 'ru')
echo'
	<h2 class="head1">Контакты</h2>
		<h2>Мы находимся по адресу:</h2><br>
		<p>г. Якутск ул. Кулаковского дом 46:</p><br>
		<li>307 кабинет - центр маркетинга инноваций и управления проектами<br><br>Тел.: +7(4112)32-03-89</li><br>
		<li>306 кабинет - студенческий бизнес инкубатор "Орех"<br><br>Тел.: +7(4112)49-66-07</li><br>
		<li>303 кабинет - центр юридического сопровождения инновационной деятельности<br><br>Тел.: +7(4112)32-03-89</li><br>
		<li>401 кабинет - центр интеллектуальной собственности<br><br>Тел.: +7(4112)49-66-11</li><br><br>
';
if(Yii::$app->language == 'en')
echo'
	<h2 class="head1">Contact</h2>
		<h2>Our address:</h2><br>
		<p>Republic of Sakha, Yakutsk, Kulakovskogo, 46:</p><br>
		<li>307 room - innovation of marketing and project menagement center.<br><br>Tel.: +7(4112)32-03-89</li><br>
		<li>306 room - student business incubator.<br><br>Tel.: +7(4112)49-66-07</li><br>
		<li>303 room - legal support innovation sector<br><br>Tel.: +7(4112)32-03-89</li><br>
		<li>401 room - intellectual Property Center<br><br>Tel.: +7(4112)49-66-11</li><br><br>
';
?>
</div>