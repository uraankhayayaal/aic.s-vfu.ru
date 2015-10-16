<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Section */

$this->title = 'Редактировать раздел: ' . ' ' . $section_ru->section_name;
$this->params['breadcrumbs'][] = ['label' => 'Разделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $section_ru->section_name;
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="section-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'section' => $section,
        'section_ru' => $section_ru,
        'section_en' => $section_en,
    ]) ?>

</div>
