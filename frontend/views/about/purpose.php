<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Цели и задачи АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Purpose of AIC';
?>
<?= $this->render('\common\_sidenav.php') ?>

<div class="col-9 scrollcontent">
    <section>
        <div class="mox-center mox-content">
            <div class="text parbase">
                <div class="vic-text">
                    <div class="row">
                        <?= $purpose_name?><br>
                    </div>
                    <div class="row">
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $name_p1?></th></tr>
                                 <tr><td class="mox-justify purpose"><img src="<?= Yii::getAlias('@resource/img/dost_oreh.jpg') ?>" width="100%" alt="WHA"></td></tr>
                                 <tr><td class="mox-justify"><?= $left_purpose?></td></tr>
                             </table>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $name_p2?></th></tr>
                                 <tr><td class="mox-justify purpose"><img src="<?= Yii::getAlias('@resource/img/dost_gen.jpg') ?>" width="100%" alt="WHA"></td></tr>
                                 <tr><td class="mox-justify"><?= $mid_purpose?></td></tr>
                             </table>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $name_p3?></th></tr>
                                 <tr><td class="mox-justify purpose"><img src="<?= Yii::getAlias('@resource/img/dost_ER.jpg') ?>" width="100%" alt="WHA"></td></tr>
                                 <tr><td class="mox-justify"><?= $bottom_purpose?></td></tr>
                             </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
</div>