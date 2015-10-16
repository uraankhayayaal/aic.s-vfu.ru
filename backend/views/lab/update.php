<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\lab */

$this->title = 'Редактировать лабораторию: ' . ' ' . $lab_ru->title;
$this->params['breadcrumbs'][] = ['label' => 'Лаборатории', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $lab_ru->title, 'url' => ['view', 'id' => $lab->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="lab-update">

    <h1><?= Html::encode($lab_ru->title) ?></h1>

    <?= $this->render('_form', [
        'lab' => $lab,
        'lab_ru' => $lab_ru,
        'lab_en' => $lab_en,
    ]) ?>

</div>
