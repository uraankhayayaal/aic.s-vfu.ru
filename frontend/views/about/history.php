<?php 
if(Yii::$app->language == 'ru')
$this->title = 'История АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'history of AIC';
?>
        <?= $this->render('\common\_sidenav.php') ?>
<div class="col-9 scrollcontent">
    <section>
        <div class="mox-center mox-content">
            <div class="text parbase">
                <div class="vic-text">
                    <div class="row">
                        <?= $history_name ?><br>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20"><p class="mox-justify"><img src="<?= Yii::getAlias('@web') ?>/img/product.jpg" width="50%" alt="history" style="float:left; margin-right:20px;">
                            <?= $bottom_history ?><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>