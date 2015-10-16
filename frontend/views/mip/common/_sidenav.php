<?php
use yii\widgets\Menu;
use yii\web\Session; 
?>
<div class="col-3">
    <?php
    $items = array();
                foreach($sections as $section) {
                    $items[] = ['label' => $section->sectionLan->section_name, 'url' => ['section/view', 'id' => $section->id], 'active' => /*($section->id == $model->id) or*/ ($mip->section->id == $section->id) ];
                }
    ?>
    <nav class="mox-side-navigation-links">
    <?php
    switch (Yii::$app->language) {
    case 'ru':            
        echo Menu::widget([
            'items' => $items,
/*
            [
                // Important: you need to specify url as 'controller/action',
                // not just as 'controller' even if default action is used.
                ['label' => 'НОВОСТИ', 'url' => ['news/index']],
                // 'Products' menu item will be selected as long as the route is 'product/index'
                ['label' => 'СОБЫТИЯ', 'url' => ['events/index']],
                /*['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['product/index'], 'items' => [
                    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                ]],*/
                //['label' => 'КОМАНДА АИЦ', 'url' => ['about/hwa'], /*'visible' => Yii::$app->user->isGuest*/],
                //['label' => 'ЦЕЛИ И ЗАДАЧИ АИЦ', 'url' => ['about/purpose']],
                //['label' => 'СТРУКТУРА АИЦ', 'url' => ['about/structure']],
            //],
        ]);
        break;
    case 'en'://default:
        echo Menu::widget([
            'items' => $items,
        ]);
        break;
    }
    ?>
    </nav><!-- Вызов виджета для любой внутренней страницы-->
</div>