<?php
use yii\widgets\Menu;
use yii\web\Session; 
?>


    <?php
    switch (Yii::$app->language) {
    case 'ru':            
        echo Menu::widget([
            'items' => [
                // Important: you need to specify url as 'controller/action',
                // not just as 'controller' even if default action is used.
                ['label' => 'ГЛАВНАЯ', 'url' => ['site/index']],
                // 'Products' menu item will be selected as long as the route is 'product/index'
                ['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['about/index'], 'active'=>\Yii::$app->controller->id == 'about'],
                /*['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['product/index'], 'items' => [
                    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                ]],*/
                ['label' => 'ИННОВАЦИОННЫЕ<br>ПРЕДПРИЯТИЯ', 'url' => ['section/index'], 'active'=>(\Yii::$app->controller->id == 'section') or (\Yii::$app->controller->id == 'mip')/*'visible' => Yii::$app->user->isGuest*/],
                ['label' => 'НАШИ<br>ЛАБОРАТОРИИ', 'url' => ['lab/index'], 'active'=>\Yii::$app->controller->id == 'lab'],
                ['label' => 'НОВОСТИ И<br>МЕРОПРИЯТИЯ', 'url' => ['article/index'], 'active'=>(\Yii::$app->controller->id == 'event') or (\Yii::$app->controller->id == 'article')],
                ['label' => 'БИЗНЕС <br>ИНКУБАТОР ОРЕХ', 'url' => ['oreh/index']],
                //['label' => 'УСЛУГИ И<br>ПРОДУКЦИИ', 'url' => ['product/index']],
            ],
        ]);
        break;
    case 'en'://default:
        echo Menu::widget([
            'items' => [
                // Important: you need to specify url as 'controller/action',
                // not just as 'controller' even if default action is used.
                ['label' => 'MAIN', 'url' => ['site/index']],
                // 'Products' menu item will be selected as long as the route is 'product/index'
                ['label' => 'ABOUT INNOVATION<br>CENTER', 'url' => ['about/index'], 'active'=>\Yii::$app->controller->id == 'about'],
                /*['label' => 'ОБ ИННОВАЦИОННОМ<br>ЦЕНТРЕ', 'url' => ['product/index'], 'items' => [
                    ['label' => 'New Arrivals', 'url' => ['product/index', 'tag' => 'new']],
                    ['label' => 'Most Popular', 'url' => ['product/index', 'tag' => 'popular']],
                ]],*/
                ['label' => 'INNOVATIVE<br>COMPANIES', 'url' => ['section/index'], /*'visible' => Yii::$app->user->isGuest*/],
                ['label' => 'OUR<br>LABORATORIES', 'url' => ['lab/index'], 'active'=>\Yii::$app->controller->id == 'lab'],
                ['label' => 'NEWS &<br>EVENTS', 'url' => ['article/index'], 'active'=>(\Yii::$app->controller->id == 'events') or (\Yii::$app->controller->id == 'article')],
                ['label' => 'BUSINESS <br>INCUBATOR "OREH"', 'url' => ['oreh/index']],
                //['label' => 'GOODS AND<br>PRODUCTS', 'url' => ['product/index']],
            ],
        ]);
        break;
    }
    ?>
