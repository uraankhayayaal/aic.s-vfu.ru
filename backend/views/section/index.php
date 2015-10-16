<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Раздел МИП-ов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="section-index list-group">

    <div class="">
        <h3><?= Html::encode($this->title) ?></h3>
        <p>
            <?= Html::a('Создать раздел МИП-ов', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <?php   
        foreach ($model as $item) {
            echo '<div class=" list-group-item">';
                    
                    echo '<div class="col-xs-12 col-md-6"><h3>Русский</h3><h4>'.$item->sectionRus->section_name.'</h4><p>'.$item->sectionRus->description.'</p>';
                    echo '<div class="col-xs-12 col-md-4">';
                    echo '</div></div>';

                    echo '<div class="col-xs-12 col-md-6"><h3>English</h3><h4>'.$item->sectionEns->section_name.'</h4><p>'.$item->sectionEns->description.'</p>';
                    echo '<div class="col-xs-12 col-md-4">'; 
                    echo '</div></div>';

                    echo '<div style="clear:both;"></div>';
                    echo '<div class="col-xs-12 col-md-12 text-center"><img src="'; echo $item->photo_path427320; echo '" alt="AIC"></div>';
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
