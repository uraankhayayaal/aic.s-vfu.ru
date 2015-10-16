<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мероприятия';
$this->params['breadcrumbs'][] = $this->title;
?>
<div style="clear:both;"></div>
<div class="events-index list-group">

    <div class="">
        <h3><?= Html::encode($this->title) ?></h3>
        <p>
            <?= Html::a('Создать мероприятие', ['create'], ['class' => 'btn btn-success']) ?>
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
        function rus2translit($string) {
            $converter = array(
                'а' => 'a',   'б' => 'b',   'в' => 'v',
                'г' => 'g',   'д' => 'd',   'е' => 'e',
                'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
                'и' => 'i',   'й' => 'y',   'к' => 'k',
                'л' => 'l',   'м' => 'm',   'н' => 'n',
                'о' => 'o',   'п' => 'p',   'р' => 'r',
                'с' => 's',   'т' => 't',   'у' => 'u',
                'ф' => 'f',   'х' => 'h',   'ц' => 'c',
                'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
                'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
                'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
                
                'А' => 'A',   'Б' => 'B',   'В' => 'V',
                'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
                'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
                'И' => 'I',   'Й' => 'Y',   'К' => 'K',
                'Л' => 'L',   'М' => 'M',   'Н' => 'N',
                'О' => 'O',   'П' => 'P',   'Р' => 'R',
                'С' => 'S',   'Т' => 'T',   'У' => 'U',
                'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
                'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
                'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
                'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
            );
            return strtr($string, $converter);
        }
        foreach ($model as $item) {
            echo '<div class=" list-group-item">';
                    echo '<div class="col-xs-12 col-md-6"><h3>Русский</h3><h4>'.$item->eventRus->title.'</h4>'.$item->eventRus->description.'<p>'.$item->eventRus->content.'</p>'; 
                    echo '<div class="col-xs-12 col-md-6"><p><strong>'.$item->place.'</strong></p><!--<h6>Понравилось: <strong>'.$item->eventRus->like.'</strong> Просмотров: <strong>'.$item->eventRus->visited.'</strong></h6>--></div><div style="clear:both;"></div>';
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-6"><h3>English</h3><h4>'.$item->eventEns->title.'</h4>'.$item->eventEns->description.'<p>'.$item->eventEns->content.'</p>';
                    echo '<div class="col-xs-12 col-md-6"><p><strong>'.rus2translit($item->place).'</strong></p><!--<h6>Понравилось: <strong>'.$item->eventEns->like.'</strong> Просмотров: <strong>'.$item->eventEns->visited.'</strong></h6>--></div><div style="clear:both;"></div>';
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-12 text-center">';
                    foreach ($item->eventPhotos as $photo) {
                        echo '<img src="'; echo $photo->photo_path7070; echo '" alt="AIC">';
                    }
                    echo '</div>';
                    echo '<div class="col-xs-12 col-md-12"><p>'.$item->author->username.' <strong>'.getdate(strtotime($item->start_timedate))['mday'].' '.$daterus[getdate(strtotime($item->start_timedate))['mon']].' '.getdate(strtotime($item->start_timedate))['year'].' - '.getdate(strtotime($item->end_timedate))['mday'].' '.$daterus[getdate(strtotime($item->end_timedate))['mon']].' '.getdate(strtotime($item->end_timedate))['year'].'</strong></p></div>';
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
