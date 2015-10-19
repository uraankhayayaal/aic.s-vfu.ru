<?php
use yii\widgets\Menu;
use yii\web\Session; 
?>

<div class="col-3">
    
    <nav class="mox-side-navigation-links">
    <?php
    switch (Yii::$app->language) {
    case 'ru':            
        echo Menu::widget([
            'items' => [
                // Important: you need to specify url as 'controller/action',
                // not just as 'controller' even if default action is used.
                ['label' => 'О ЦЕНТРЕ', 'url' => ['about/index']],
                // 'Products' menu item will be selected as long as the route is 'product/index'
                ['label' => 'ИСТОРИЯ', 'url' => ['about/history']],
                /*['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['product/index'], 'items' => [
                    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                ]],*/
                ['label' => 'КОМАНДА', 'url' => ['about/hwa'], /*'visible' => Yii::$app->user->isGuest*/],
                ['label' => 'ДОСТИЖЕНИЯ', 'url' => ['about/purpose']],
                ['label' => 'СТРУКТУРА', 'url' => ['about/structure']],
                ['label' => 'КОНТАКТЫ', 'url' => ['order/create']],
            ],
        ]);
        break;
    case 'en'://default:
        echo Menu::widget([
            'items' => [
                // Important: you need to specify url as 'controller/action',
                // not just as 'controller' even if default action is used.
                ['label' => 'ABOUT AIC', 'url' => ['about/index']],
                // 'Products' menu item will be selected as long as the route is 'product/index'
                ['label' => 'HISTORY', 'url' => ['about/history']],
                /*['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['product/index'], 'items' => [
                    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                ]],*/
                ['label' => 'OUR TEAM', 'url' => ['about/hwa'], /*'visible' => Yii::$app->user->isGuest*/],
                ['label' => 'OUR ACHIEVEMENTS', 'url' => ['about/purpose']],
                ['label' => 'STRUCTURE', 'url' => ['about/structure']],
                ['label' => 'CONTACT', 'url' => ['order/create']],
            ],
        ]);
        break;
    }
    ?>
    </nav><!-- Вызов виджета для любой внутренней страницы-->
</div>