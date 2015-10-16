<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\news */

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'article' => $article,
        'article_ru' => $article_ru,
        'article_en' => $article_en,
        'photos' => $photos,
    ]) ?>

</div>
