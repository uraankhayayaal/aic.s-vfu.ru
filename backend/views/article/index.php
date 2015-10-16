<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url; 

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="clear:both;"></div>
<div class="news-index list-group">
    
    <div class="">
        <h3><?= Html::encode($this->title) ?></h3>
        <p>
            <?= Html::a('Создать новость', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>

    <?php 
    $daterus = [
            '1' => 'января',
            '2' => 'февраля',
            '3' => 'марта',
            '4' => 'апреля',
            '5' => 'мая',
            '6' => 'июня',
            '7' => 'июля',
            '8' => 'августа',
            '9' => 'сентября',
            '10' => 'октября',
            '11' => 'ноября',
            '12' => 'декабря',
        ];  
        foreach ($model as $item) {
            echo '<div class=" list-group-item">';                   
                    echo '<div class="col-xs-12 col-md-6"><h3>Русский</h3><h4>'.$item->articleRus->title.'</h4>'.$item->articleRus->description.'<p>'.$item->articleRus->content.'</p>';
                    echo '<div class="col-xs-12 col-md-12"><!--<h6>Понравилось: <strong>'.$item->articleRus->like.'</strong> Просмотров: <strong>'.$item->articleRus->visited.'</strong></h6>--></div><div style="clear:both;"></div>';
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-6"><h3>English</h3><h4>'.$item->articleEns->title.'</h4>'.$item->articleEns->description.'<p>'.$item->articleEns->content.'</p>';
                    echo '<div class="col-xs-12 col-md-12"><!--<h6>Понравилось: <strong>'.$item->articleEns->like.'</strong> Просмотров: <strong>'.$item->articleEns->visited.'</strong></h6>--></div><div style="clear:both;"></div>';
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-12 text-center">'; 
                    foreach ($item->articlePhotos as $photo) {
                        echo '<img src="'; echo $photo->photo_path7070; echo '" alt="AIC">';
                    }
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-8"><p>'.$item->author->username.' <strong>'.getdate(strtotime($item->date_time))['mday'].' '.$daterus[getdate(strtotime($item->date_time))['mon']].' '.getdate(strtotime($item->date_time))['year'].'</strong></p></div>';
                    echo '<div style="clear:both;"></div>';
                    echo '<div class="col-xs-12 col-md-12 btn-group">';
                        echo Html::a('Редактировать', ['update', 'id' => $item->id], ['class' => 'btn btn-primary']);
                        echo Html::a('Удалить', ['delete', 'id' => $item->id], [
                            'class' => 'btn btn-danger',
                            'data' => [
                                'confirm' => ' Вы действительно хотите удалить событие?',
                                'method' => 'post',
                            ],
                        ]);
                    echo '</div><div style="clear:both;"></div>';
                echo '</div>';
        }
    ?>
    <div style="clear:both;"></div>
</div>
