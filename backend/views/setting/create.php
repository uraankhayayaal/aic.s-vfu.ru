<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Setting */

$this->title = 'Создать Параметр';
$this->params['breadcrumbs'][] = ['label' => 'Параметры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'Setting' => $Setting,
        'Setting_en' => $Setting_en,
        'Setting_ru' => $Setting_ru,
    ]) ?>

</div>
