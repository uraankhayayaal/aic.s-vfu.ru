<?php
use yii\helpers\Url;
use yii\widgets\Menu;
?>
<div class="footer container_16">
    <div class="grid_6">
        <div class="footer page footer_links">
            <!-- Footer Starts -->
            <footer>
                <div class="footer-wrapper mox-container">
                    <div class="col-12">           
                        <div class="col-10">
                            <div class="col-12 footer_artic">
                                <ul>
                                    <?php
                                    switch (Yii::$app->language) {
                                    case 'ru':            
                                        echo '  <li class="copyrights"><a href="' . Yii::$app->getHomeUrl() . '">© Арктический инновационный центр</a></li>
                                                <li><a href="http://s-vfu.ru" target="_blank">СВФУ им. М.К. Аммосова</a></li>
                                                <li><a href="' . Url::toRoute('site/setlang?lang=en') . '">English</a></li>';
                                        break;
                                    case 'en'://default:
                                        echo '  <li class="copyrights"><a href="' . Yii::$app->getHomeUrl() . '">© Arctic innovation center</a></li>
                                                <li><a href="http://s-vfu.ru" target="_blank">North-Eastern Federal University</a></li>
                                                <li><a href="' . Url::toRoute('site/setlang?lang=ru') . '">Russian</a></li>';
                                        break;
                                    }
                                    ?>
                                </ul>
                            </div>
                            <div class="col-12">
                                
                                    <?php
                                        switch (Yii::$app->language) {
                                        case 'ru':            
                                            echo '  <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/address.png" width="50" alt="contact"> <span>677013, Республика Саха (Якутия), г.Якутск, ул. Кулаковского, 46</span></p></div>
                                                    <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/email.png" width="50" alt="contact"> <span>aic.svfu@mail.ru</span></p></div>
                                                    <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/phone.png" width="50" alt="contact"> <span>8(4112)36-09-89</span></p></div>';
                                            break;
                                        case 'en'://default:
                                            echo '  <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/address.png" width="50" alt="contact"> <span>677013, Republic of Sakha, Yasutsk, Kulakovskogo 46 st.</span></p></div>
                                                    <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/email.png" width="50" alt="contact"> <span>aic.svfu@mail.ru</span></p></div>
                                                    <div class="col-4 footer_contact"><p><img src="' . Yii::getAlias('@web') . '/img/phone.png" width="50" alt="contact"> <span>8(4112)36-09-89</span></p></div>';
                                            break;
                                        }
                                        ?>
                                
                            </div>
                        </div>

                        <div class="col-2 social align-top">
                            <script>
                                $(function () {
                                    $.scrollUp({
                                        scrollName: 'scrollUp', //  ID элемента
                                        topDistance: '1300', // расстояние после которого появится кнопка (px)
                                        topSpeed: 300, // скорость переноса (миллисекунды)
                                        animation: 'fade', // вид анимации: fade, slide, none
                                        animationInSpeed: 200, // скорость разгона анимации (миллисекунды)
                                        animationOutSpeed: 200, // скорость торможения анимации (миллисекунды)
                                        scrollText: 'Scroll to top', // текст
                                        activeOverlay: #FF0000, // задать CSS цвет активной точке scrollUp, например: '#00FFFF'
                                    });
                                });
                            </script>
                            <a href="#" class="" id="scrollUp">
                                <?php if(Yii::$app->language == 'ru')
                                echo 'Наверх';
                                if(Yii::$app->language == 'en')
                               echo 'To top';
                                ?>
                            </a>
                            <ul class="">
                                <li><a href="https://vk.com/aicsvfu" target="_blank" class="vk"></a></li>
                                <li><a href="https://www.facebook.com/aic.nefu" target="_blank" class="fb"></a></li>
                                <li><a href="https://instagram.com/aicnefu" target="_blank" class="in"></a></li>
                            </ul>
                            <img class="footer_logo" src="<?= Yii::getAlias('@web') ?>/img/logo_H.png" alt="logo">
                        </div>
                    </div><!-- col-12 END -->
                </div>
            </footer>
            <!-- Footer Ends -->
        </div>
    </div>
</div>