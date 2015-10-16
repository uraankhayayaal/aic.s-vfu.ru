<?php 
use yii\helpers\Url; 
?>

<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Новости АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'News of AIC';
?>
        <?= $this->render('\common\_sidenav.php') ?>
<div class="col-9 scrollcontent">

    <?php
        if(Yii::$app->language == 'ru') $daterus = [
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
        if(Yii::$app->language == 'en') $daterus = [
            '1' => 'january',
            '2' => 'february',
            '3' => 'march',
            '4' => 'april',
            '5' => 'may',
            '6' => 'june',
            '7' => 'july',
            '8' => 'august',
            '9' => 'september',
            '10' => 'oktober',
            '11' => 'november',
            '12' => 'desember',
        ];
        $i = 0;
    foreach ($model as $item) {
        echo '<section class="news_list"><div class="row">';
        echo '<div class="col-3 rame align-top">';
            if($item->articlePhotos[0]->photo_path != ''){
                echo '<img title="'.$item->articleLan->title.'" alt="'.$item->articleLan->title.'" class="cq-dd-image" src="';         
                echo $item->articlePhotos[0]->photo_path427320;
                echo '">';
            }
            echo '</div>';
            echo '<div class="col-9 align-top"><a href="'.Url::toRoute('article/view?id=').$item->id.'"><h3 class="cta">'.$item->articleLan->title.'</h3></a>';
            echo '<h4 class="mox-justify">'.$item->articleLan->description.'</h4>';
            //echo '<p class="content">'.$item->articleLan->content.'</p>';
            echo '<p class="mox-date">Опубликовано: '.getdate(strtotime($item->date_time))['mday'].' '.$daterus[getdate(strtotime($item->date_time))['mon']].' '.getdate(strtotime($item->date_time))['year'].'<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script> <span class="pull-right yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter" data-yashareTheme="counter"></span></p>';
            
            echo '</div>';
        echo '</div></section>';
     }
    ?>
</div>
