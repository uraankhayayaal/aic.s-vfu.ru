<?php
/* @var $this yii\web\View */
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1>Заявки АИЦ</h1>

<?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return $this->render('_view', ['model' => $model]);
        },
        'layout' => "{pager}\n{items}\n{pager}",
    ]) ?>
