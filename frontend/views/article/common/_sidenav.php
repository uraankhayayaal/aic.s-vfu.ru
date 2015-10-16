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
                ['label' => 'НОВОСТИ', 'url' => ['article/index'], 'active'=>\Yii::$app->controller->id == 'article'],
                ['label' => 'МЕРОПРИЯТИЯ', 'url' => ['event/index'], 'active'=>\Yii::$app->controller->id == 'event'],
            ],
        ]);
        break;
    case 'en'://default:
        echo Menu::widget([
            'items' => [
                ['label' => 'NEWS', 'url' => ['article/index'], 'active'=>\Yii::$app->controller->id == 'article'],
                ['label' => 'EVENTS', 'url' => ['event/index'], 'active'=>\Yii::$app->controller->id == 'event'],
            ],
        ]);
        break;
    }
    ?>
    </nav><!-- Вызов виджета для любой внутренней страницы-->
</div>