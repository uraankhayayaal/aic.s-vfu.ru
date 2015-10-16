<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\lab */

$this->title = 'Create Lab';
$this->params['breadcrumbs'][] = ['label' => 'Labs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'lab' => $lab,
        'lab_ru' => $lab_ru,
        'lab_en' => $lab_en,
    ]) ?>

</div>
