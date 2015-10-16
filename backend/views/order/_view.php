<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="list-group-item">
	<div class="col-xs-12 col-md-12">
		<h3></h3>
		<h4><?= $model->first_name ?> <?= $model->last_name ?></h4>
		<p><?= $model->email ?>, <?= $model->phone ?></p>
		<p><?= $model->type ?></p>
		<p><?= $model->text ?></p>
		<p><?= $model->send_at ?></p>
		<?php if($model->is_new != 1) echo Html::a('Отметить как прочитанное', ['visit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>	</div>
	<div style="clear:both;"></div>
</div>







