<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Mip */

$this->title = 'Создать МИП';
$this->params['breadcrumbs'][] = ['label' => 'МИП-ы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mip-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'mip' => $mip,
        'mip_ru' => $mip_ru,
        'mip_en' => $mip_en,
    ]) ?>

</div>
