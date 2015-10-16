<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Events */

$this->title = 'Редактирование мероприятия: ' . ' ' . $event_ru->title;
$this->params['breadcrumbs'][] = ['label' => 'Мероприятия', 'url' => ['index']];
$this->params['breadcrumbs'][] = $event_ru->title;
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="events-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'event' => $event,
        'event_ru' => $event_ru,
        'event_en' => $event_en,
        'photos' => $photos,
    ]) ?>

</div>
