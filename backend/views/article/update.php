<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\news */

$this->title = 'Редактировать новость: ' . ' ' . $article_ru->title;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] = $article_ru->title;
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="news-update">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form', [
        'article' => $article,
        'article_ru' => $article_ru,
        'article_en' => $article_en,
        'photos' => $photos,
    ]) ?>
	 
	
</div>
