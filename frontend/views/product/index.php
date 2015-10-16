<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Продукты и услуги';
if(Yii::$app->language == 'en')
$this->title = 'Goods and products';
?>
<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>
<?php if(Yii::$app->language == 'ru'){
	echo '<h3 class="head1">Продукты и услуги</h3>
	<p>Чтобы получить информацию о услугах и продуктах наших МИП-ов заполните пожалйста ';
	echo '<a class="" href="'.Url::toRoute("order/create").'">форму</a>.</p><br>';
}
?>

<?php if(Yii::$app->language == 'en'){
	echo '<h3 class="head1">Goods and products</h3>
	<p>For more information about products and goods our small innovative companies please fill in the ';
	echo '<a class="" href="'.Url::toRoute("order/create").'">application</a>.</p><br>';
}
?>

<div class="row">
	<img src="<?= Yii::getAlias('@resource/img/product.jpg') ?>" width="100%" alt="">
</div>