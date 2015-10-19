<?php
/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;
?>

<?php
       $daterus = [
            '1' => 'января',
            '2' => 'февраля',
            '3' => 'марта',
            '4' => 'апреля',
            '5' => 'мая',
            '6' => 'июня',
            '7' => 'июля',
            '8' => 'августа',
            '9' => 'сентября',
            '10' => 'октября',
            '11' => 'ноября',
            '12' => 'декабря',
        ];
?>

<div class="list-group-item">
	<div class="col-xs-12 col-md-12">
		<h3></h3>
		<h4><?= $model->first_name ?> <?= $model->last_name ?></h4>
		<b><?= $model->question[0][$model->type] ?></b>
		<p><?= $model->email ?><br><?= $model->phone ?></p>
		<p><?= $model->text ?></p>
		<p><?= getdate(strtotime($model->send_at))['mday'].' '.$daterus[getdate(strtotime($model->send_at))['mon']].' '.getdate(strtotime($model->send_at))['year']  ?></p>
		<?php if($model->is_new != 1) echo Html::a('Отметить как прочитанное', ['visit', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>	</div>
	<div style="clear:both;"></div>
</div>







