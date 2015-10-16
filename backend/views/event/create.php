<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Events */

$this->title = 'Создать мероприятие';
$this->params['breadcrumbs'][] = ['label' => 'Мероприятие', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="events-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'event' => $event,
        'event_ru' => $event_ru,
        'event_en' => $event_en,
        'photos' => $photos,
    ]) ?>

</div>
