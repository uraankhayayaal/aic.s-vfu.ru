<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Section */

$this->title = 'Новый раздел МИП-ов';
$this->params['breadcrumbs'][] = ['label' => 'Разделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'section' => $section,
        'section_ru' => $section_ru,
        'section_en' => $section_en,
    ]) ?>

</div>
