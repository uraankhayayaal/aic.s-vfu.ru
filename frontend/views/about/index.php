<?php 
if(Yii::$app->language == 'ru')
$this->title = 'О центре';
if(Yii::$app->language == 'en')
$this->title = 'About AIC';
?>
<?= $this->render('\common\_sidenav.php') ?>

<div class="col-9 scrollcontent">
    <section>
        <div class="mox-center mox-content">
            <div class="text parbase">
                <div class="vic-text">
                    <div class="row">
                        <div class="col-12">
                            <img src="<?= Yii::getAlias('@web') ?>/img/aic.jpg" alt="about" width="100%">
                        </div>
                    </div>
                    <div class="row" style="margin:20px 0;">
                        <h3><?= $about_name ?></h3>
                    </div>                    
                    <div class="row">
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $vison; ?></th></tr>
                                 <tr><td class="mox-justify"><?= $vison_content; ?></td></tr>
                             </table>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $mission; ?></th></tr>
                                 <tr><td class="mox-justify"><?= $mission_content; ?></td></tr>
                             </table>
                        </div>
                        <div class="col-4 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $purpose; ?></th></tr>
                                 <tr><td class="mox-justify"><?= $purpose_content; ?></td></tr>
                             </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.639362266949!2d129.70607138373757!3d62.017467448041735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5bf64a79fc4f8fd5%3A0xbb7e9b2283223a89!2z0JDRgNC60YLQuNGH0LXRgdC60LjQuSDQuNC90L3QvtCy0LDRhtC40L7QvdC90YvQuSDRhtC10L3RgtGA!5e0!3m2!1sru!2sru!4v1443425844452" width="100%" height="400" frameborder="0" style="border:none; margin-bottom:20px;" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mox-padd-20">
                            <table class="shadow">
                                 <tr><th class="mox-center"><?= $tasks; ?></th></tr>
                                 <tr><td class="mox-justify"><?= $tasks_content; ?></td></tr>
                             </table>
                        </div>
                    </div>

                     <div class="row">
                        <div class="col-12 mox-padd-20">
                            <div class="col-4 hwa_logo">
                                <img class="footer_logo" src="<?= Yii::getAlias('@web') ?>/img/logo_H.png" alt="logo">
                            </div>
                            <div class="col-8">
                            <div class="mox-padd-20"></div>
                            <div class="mox-padd-20"></div>
                                <p class="mox-left"><?php if(Yii::$app->language == 'ru')
                                            echo '<p class="mox-left"></p>
                                                    <ul class="label mox-justify">Эмблема нашего центра имеет форму полярного сияния, которая ассоциируется с Крайним Севером. 
                                                    Полярное сияние - символ совершенства, инноваций и потенциала. Этот символ был выбран потому, что он способен одновременно выражать все наши ценности, видения и идеи:
                                                    <li>Движение. Проекция фигуры направлена вверх по нарастающей.</li>
                                                    <li>Инновации. Переливание цветов символизирует динамичное развитие нашего современного общества.</li>
                                                    <li>Многогранность. Графика логотипа подчёркивает многоотраслевое назначение Арктического инновационного центра.</li></ul>';
                                        if(Yii::$app->language == 'en')
                                            echo 'Logo of AIC';
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> 
</div>