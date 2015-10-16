<?php use yii\web\Session; ?>
					
<?php
    switch (Yii::$app->language) {
    case 'ru':            
        echo 
        			'<a href="' . Yii::getAlias('@web') . '"><div class="mox-top-logo">
                        <h1><img src="' . Yii::getAlias('@web') . '/img/logo.png" alt="logo AIC"> Арктический <span>Инновационный Центр</span></h1>
                        <div class="text parbase innovations-tagline">
                            <div class="vic-text">
                                <h2>СВФУ им. М.К. Аммосова</h2>
                            </div>
                        </div>
                    </div></a>';
        break;
    case 'en'://default:
        echo 
        			'<a href="' . Yii::getAlias('@web') . '"><div class="mox-top-logo">
                        <h1><img src="' . Yii::getAlias('@web') . '/img/logo.png" alt="logo AIC"> Arctic <span>Innovation Center</span></h1>
                        <div class="text parbase innovations-tagline">
                            <div class="vic-text">
                                <h2 class="head5">NEFU named after M.K. Ammosov</h2>
                            </div>
                        </div>
                    </div></a>';
        break;
    }
    ?>