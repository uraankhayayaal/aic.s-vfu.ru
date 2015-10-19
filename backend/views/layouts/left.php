<?php
use yii\bootstrap\Nav;
use yii\helpers\Url;
use common\models\Order;

?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Онлайн</a>
            </div>
        </div>

        <!-- search form 
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Поиск..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        /.search form -->
        <?php if ( Order::count() > 0 ) $order = ' ('.Order::count().')'; else $order = ''; ?>
        <?= 
        Nav::widget(
            [
                'encodeLabels' => false,
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    '<li class="header">Меню администрации</li>',
                    ['label' => '<span>Системные настройки</span>', 'url' => ['/setting/index']],
                    ['label' => '<span>Новости</span>', 'url' => ['/article/index'],
                        'items' => [
                            ['label' => '<span>Создать новость</span>', 'url' => ['/article/create']],
                            ['label' => '<span>Все новости</span>', 'url' => ['/article/index']],
                        ],
                    ],
                    ['label' => '<span>Мероприятия</span>', 'url' => ['/event/index'],
                        'items' => [
                            ['label' => '<span>Создать мероприятие</span>', 'url' => ['/event/create']],
                            ['label' => '<span>Все мероприятия</span>', 'url' => ['/event/index']],
                        ],
                    ],
                    ['label' => '<span>МИП</span>', 'url' => ['/mip/index'],
                        'items' => [
                            ['label' => '<span>Создать МИП</span>', 'url' => ['/mip/create']],
                            ['label' => '<span>Все МИП-ы</span>', 'url' => ['/mip/index']],
                        ],
                    ],
                    ['label' => '<span>Лаборатории</span>', 'url' => ['/lab/index'],
                        'items' => [
                            ['label' => '<span>Создать Лабораторию</span>', 'url' => ['/lab/create']],
                            ['label' => '<span>Все Лаборатории</span>', 'url' => ['/lab/index']],
                        ],
                    ],
                    ['label' => '<span>Разделы МИП-ов</span>', 'url' => ['/section/index'],
                        'items' => [
                            ['label' => '<span>Создать раздел</span>', 'url' => ['/section/create']],
                            ['label' => '<span>Все разделы</span>', 'url' => ['/section/index']],
                        ],
                    ],
                    ['label' => '<span>Заявки'.$order.'</span>', 'url' => ['/order/index']],
                    //['label' => '<i class="fa fa-dashboard"></i><span>Страницы</span>', 'url' => ['/pages/index']],
                    /*[
                        'label' => '<i class="glyphicon glyphicon-lock"></i><span>Вход на сайт</span>', //for basic
                        'url' => ['/site/login'],
                        'visible' =>Yii::$app->user->isGuest
                    ],*/
                    
                ],
            ]
        );
        ?>

        <!--<ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <span>Страницы</span><i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= Url::toRoute('/pages/main'); ?>">Главная</a>
                    </li>
                    <li>
                        <a href="#">Об АИЦ <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="<?= Url::toRoute('/pages/about'); ?>">О нас </a></li>
                            <li><a href="<?= Url::toRoute('/pages/history'); ?>">История</a></li>
                            <li><a href="<?= Url::toRoute('/pages/hwa'); ?>">Команда</a></li>
                            <li><a href="<?= Url::toRoute('/pages/purpose'); ?>">Достижения</a></li>
                            <li><a href="<?= Url::toRoute('/pages/structure'); ?>">Структура</a></li>
                        </ul>
                    </li>
                    <li><a href="<?= Url::toRoute('/pages/oreh'); ?>">Орех</a>
                    </li>
                </ul>
            </li>
        </ul>-->

    </section>

</aside>
