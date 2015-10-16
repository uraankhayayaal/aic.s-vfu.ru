<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Setting */

$this->title = 'Редактировать параметр: ' . ' ' . $Setting->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $Setting->id, 'url' => ['view', 'id' => $Setting->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'Setting' => $Setting,
        'Setting_en' => $Setting_en,
        'Setting_ru' => $Setting_ru,
    ]) ?>

</div>
