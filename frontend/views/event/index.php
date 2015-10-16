<?php 
use yii\helpers\Url; 
?>

<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Мероприятия АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Events of AIC';
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
        echo '<section class="news_list"><div class="row">';
            echo '</div><div class="row"><div class="col-8 news_content align-top">';
            echo '<a href="'.Url::toRoute('event/view?id=').$item->id.'"><h3 class="cta">'.$item->eventLan->title.'</h3></a><p class="admin">Время: '.getdate(strtotime($item->start_timedate))['mday'].' '.$daterus[getdate(strtotime($item->start_timedate))['mon']].' '.getdate(strtotime($item->start_timedate))['year'].' - '.getdate(strtotime($item->end_timedate))['mday'].' '.$daterus[getdate(strtotime($item->end_timedate))['mon']].' '.getdate(strtotime($item->end_timedate))['year'].', ';
            if(Yii::$app->language == 'ru') echo $item->place; else echo rus2translit($item->place);
            echo '</p>';
            echo '<p>'.$item->eventLan->description.'</p><p><script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script> <span class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter" data-yashareTheme="counter"></span></p>';
            echo '</div>';
            echo '<div class="col-4 align-top">';
            echo '<img title="'.$item->eventLan->title.'" alt="'.$item->eventLan->title.'" class="cq-dd-image" src="';         
                if($item->eventPhotos[0]->photo_path427320 == '') echo Yii::getAlias('@resource/img/news.jpg'); else echo $item->eventPhotos[0]->photo_path427320;
            echo '" width="100%">';
            echo '</div>';
        echo '</div></section>';
     }
     
    ?>
</div>

