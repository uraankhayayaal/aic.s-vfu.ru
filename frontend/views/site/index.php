<?php 
if(Yii::$app->language == 'ru')
$this->title = 'АИЦ СВФУ им. М.К. Аммосова';
if(Yii::$app->language == 'en')
$this->title = 'AIC NEFU in Yakutsk';
?>
<?php
/* @var $this yii\web\View */

use yii\helpers\Url;
?>

<section class="row-grey">
    <div class="mox-center mox-content">
        <div class="text page-header parbase">
            <div class="vic-text">
                <?= $innovation_text_on_main_page; ?>
            </div>
        </div>
    </div>
</section>   

<div class="mox-content">
    <section class="row mox-padd-20-top">
        <div class="col-4">
            <div class="text parbase text-spotlight">
                <div class="vic-text">
                    <?= $cooperation_with_aic; ?>
                    <?= '<a class="cta" href="'.Url::toRoute("order/create").'">'.$fill_in_the_blank.'</a>';?>
                </div>
            </div>
        </div>
        <div class="col-8">
            <!-- Подклчение только на этой странице-->
            <script type="text/javascript" src="<?=Yii::getAlias('@resource/js/clientlibs-expanddrawer.js') ?>"></script>
            <link rel="stylesheet" href="<?=Yii::getAlias('@resource/css/clientlibs-expanddrawer.css') ?>" type="text/css">


            <div class="drawer">
                <div class="drawer-ratio"></div>
                <div class="top-drawer is-visible">
                    <div class="caratoggle">
                        <span class="icons icon-arrows-gt"></span>
                    </div>

                    <div class="reveal-panel">
                        <div class="panel-ratio"></div>
                        <div class="panel-content">
                            <div class="text parbase header">

                                <div class="vic-text">
                                    <?= $find_out_how_we_can_help_you; ?>
                                </div>
                            </div>

                            <div class="row">                
                                <div class="col-6 pad-rt align-top">
                                    <div class="pod1 text parbase">

                                        <div class="vic-text">
                                            <?= $information_for_Students; ?>
                                        </div>
                                    </div>

                                    <div class="indent">
                                        <div class="link text-pod1-link-cta">
                                            <?= '<a class="cta" href="'.Url::toRoute("order/create").'">'.$fill_in_the_blank.'</a>';?>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5 align-top">
                                    <div class="pod2 text parbase">

                                        <div class="vic-text">
                                            <?= $for_scientists_and_enterpreneurs; ?>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-1"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-panel">
                    <div class="background-img parbase image">
                        <img title="Have a great product idea?" alt="Verizon Innovation Centers Product Idea" class="cq-dd-image" src="<?=Yii::getAlias('@resource/img/1427140929761.jpg') ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="row">

        <?php

        echo '<script type="text/javascript" src="'.Yii::getAlias('@resource/js/clientlibs-animatedhover.js').'"></script>
                <link rel="stylesheet" href="'.Yii::getAlias('@resource/css/clientlibs-animatedhover.css').'" type="text/css">';
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
        foreach ($event as $item) {
           
                echo '<div class="col-4 mox-animated-pods">
                    <div class="parbase pod'.($i-1).' image animated_pod">
                        <a href="'.Url::toRoute('event/index').'">
                            <figure class="events animated-pod show-overlay button-hide white-overlay-after lines-effect inset-lines">
                                <div class="overlay events"></div>
                                <img title="'.$item->eventLan->title.'" alt="'.$item->eventLan->title.'" class="cq-dd-image" src="';
                                
                                if($item->eventPhotos[0]->photo_path427320 == '') echo Yii::getAlias('@resource/img/news.jpg'); else echo $item->eventPhotos[0]->photo_path427320;

                                echo '">
                                <figcaption>
                                    <h2>'.$item->eventLan->title.'</h2>
                                    <p>'.getdate(strtotime($item->start_timedate))['mday'].' '.$daterus[getdate(strtotime($item->start_timedate))['mon']].' '.getdate(strtotime($item->start_timedate))['year'].'</p>
                                    <p class="cta">';
                                    if(Yii::$app->language == 'ru') echo $item->place; else echo rus2translit($item->place);
                                    echo '</p>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>';
         }
        ?>

    </section>

    <section>
        <div class="row">
            <div class="col-8 new_index">
                <div class="image-spotlight2 parbase image">
                    <img title="machine-connect" alt="Machine Connect" class="cq-dd-image" src="<?= $articleimage ?>">
                </div>
            </div>                    
            <div class="col-4">
                <div class="text-spotlight">
                    <div class="text parbase text-spotlight2">
                        <div class="vic-text">
                            <h2 style="text-align: center;"><?= $article->articleLan->title ?></h2>
                            <p style="text-align: center;"><?= $article->articleLan->description ?>
                            </p>
                        </div>
                    </div>
                    <br>
                    <div class="text-spotlight2-link-cta link">
                    <a class="cta" href="<?= Url::toRoute('article/index') ?>">
                        <?php if(Yii::$app->language == 'ru')
                        echo 'ВСЕ НОВОСТИ';
                        if(Yii::$app->language == 'en')
                        echo 'NEWS';?>
                    </a></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <?php
        $i = 0; $color = array('red', 'grey', 'black', 'white');
        foreach ($section as $item) {
            $i++;
            if(($i+3)%4 == 0) echo '<div class="row">';
                echo '<div class="col-3 mox-animated-pods redd">
                    <div class="parbase animated-pod'.($i-1).' image animated_pod">
                        <a href="'.Url::toRoute('section/view?id=').$item->id.'">
                            <figure class="overlay-'.$color[rand(0,3)].' animated-pod show-overlay mips white-overlay-after lines-effect inset-lines short">
                                <div class="overlay mips"></div>
                                <img title="'.$item->sectionLan->section_name.'" alt="'.$item->sectionLan->section_name.'" class="cq-dd-image" src="';
                                
                                if($item->photo_path427320 == '') echo Yii::getAlias('@resource/img/news.jpg'); else echo $item->photo_path427320;

                                echo '">
                                <figcaption>
                                    <h2>'.$item->sectionLan->section_name.'</h2>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                </div>';
            if($i%4 == 0) echo '</div>';
         }
        ?>
    </section>
</div><!-- //mox-content -->