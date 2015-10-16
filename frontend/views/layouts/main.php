<?php
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<?= $this->render('/common/_head.php') ?>
<body class="mox-vic"> <!--<![endif]-->
    <?php $this->beginBody() ?>
    <div class="mox-container">     
        <div class="parbase header_component header">
            <header class="has-img">
                <div class="black-gradient"></div>
                <?= $this->render('/common/_black.php') ?>
                    <?= $this->render('/common/_logo.php') ?>
                    <nav class="mox-top-navigation-links  main">
                        <?= $this->render('/common/_menu-item.php') ?>
                    </nav>
                </div>
            </header>
        </div>
        
        <!--<?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>-->

        <?= $content ?>

    </div>  <!-- mox-home-content ends -->


    <?= $this->render('/common/_footer.php') ?>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>