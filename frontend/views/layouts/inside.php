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
    <script type="text/javascript" src="../js/side_nav_fix.js"></script>
    <div class="mox-container">     
        <div class="parbase header_component header">
            <header class="has-img">
                <div class="">
                    <?= $this->render('/common/_logo.php') ?>
                    <nav class="mox-top-navigation-links">
                        <?= $this->render('/common/_menu-item.php') ?>
                    </nav>
                </div>
            </header>
        </div>
        
        <div class="mox-content">
            <?= $content ?>
        </div>

    </div>  <!-- mox-home-content ends -->


    <?= $this->render('/common/_footer.php') ?>
    
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>