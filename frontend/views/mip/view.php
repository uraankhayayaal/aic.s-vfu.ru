<?php 
if(Yii::$app->language == 'ru')
$this->title = 'МИП-ы АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Small innovative companies of AIC';
?>
 <?= $this->render('\common\_sidenav.php', ['sections' => $sections, 'mip' => $mip, ]) ?>
<div class="col-9 scrollcontent">
	<section><div class="row">

			<h3 class="head1"><?= $mip->mipLan->company_name ?></h3>

			<p>
			   <?= $mip->mipLan->company_name ?>
			</p>

			<p>
			   <?= $mip->mipLan->description ?>
			</p>
			<p>
			   <b>Телефон: </b><?= $mip->phone ?>
			</p>
			<p>
			  <b>электронная почта: </b><?= $mip->email ?>
			</p>
			<img
			   src="<?= $mip->photo_path427320 ?>"
			>
			<p>
			   <?= $mip->mipLan->content ?>
			</p>
			
			<p>
			   <?= $mip->mipLan->page ?>
			</p>

</div></section>

</div>
