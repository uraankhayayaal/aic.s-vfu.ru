<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Лаборатории АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Laboratoties of AIC';
?>
	<section><div class="row">

			<h3 class="head1"><?= $lab->labLan->company_name ?></h3>

			<p>
			   <?= $lab->labLan->company_name ?>
			</p>

			<p>
			   <?= $lab->labLan->description ?>
			</p>
			<p>
			  <b>электронная почта: </b><?= $lab->email ?>
			</p>
			<img
			   src="<?= $lab->photo_path427320 ?>"
			>
			<p>
			   <?= $lab->labLan->content ?>
			</p>

</div></section>

