<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Лаборатории';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lab-index">

    <div class="">
        <h3><?= Html::encode($this->title) ?></h3>
        <p>
            <?= Html::a('Создать Лабораторию', ['create'], ['class' => 'btn btn-success']) ?>
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
        foreach ($labs as $item) {
            echo '<div class=" list-group-item">';
                    echo '<div class="col-xs-12 col-md-12"><p>'; echo $item->user->username; echo ', '; echo getdate(strtotime($item->created_date))['mday'].' '.$daterus[getdate(strtotime($item->created_date))['mon']].' '.getdate(strtotime($item->created_date))['year']; echo '</p></div>';
                    
                    echo '<div class="col-xs-12 col-md-4 text-center"><img style="width:100%;" src="'; echo $item->photo_path427320; echo '" alt="AIC"></div>';

                    echo '<div class="col-xs-12 col-md-4"><h3>Русский</h3><p>'.$item->labRus->title.'</p><p>'.$item->labRus->description.'</p>';
                    echo '<p>'.$item->labRus->company_name.'</p><p>'.$item->labRus->content.'</p></div>';

                    echo '<div class="col-xs-12 col-md-4"><h3>English</h3><p>'.$item->labEns->title.'</p><p>'.$item->labEns->description.'</p>';
                    echo '<p>'.$item->labEns->company_name.'</p><p class="mox-justify">'.$item->labEns->content.'</p></div>';

                    echo '<div style="clear:both;"></div>';
                    echo '<div class="col-xs-12 col-md-12"><p><b>Электронная почта: </b>'; echo $item->email; echo '</p></div>';
                    
                    echo '<div class="col-xs-12 col-md-12 btn-group"><br>';
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
