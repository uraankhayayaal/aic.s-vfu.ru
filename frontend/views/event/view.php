    <?php

    use yii\helpers\Html;
    use yii\widgets\DetailView;
    use yii\grid\GridView;
    use yii\bootstrap\Carousel;
    use yii\helpers\Url; 

    /* @var $this yii\web\View */
    /* @var $model common\models\news */

    $this->title = $model->eventLan->title;
    /*$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
    $this->params['breadcrumbs'][] = $this->title;*/
    ?>
    <?= $this->render('\common\_sidenav.php') ?>
    <div class="news-view col-9 scrollcontent">
        <?php 
        $images = array();
        $i = 0;
        foreach ($photos as $photo) {
            $images[$i]['content'] = '<img src="' . $photo->photo_path . '" alt="test">';
            $images[$i]['caption'] = '<img src="' . $photo->photo_path7070 . '" alt="test">';//'<img src="' . $photo->photo_path . '" alt="test" width="30" height="30">';
            $images[$i]['options'] = [
                'style' => 'width:100%' // set the width of the container if you like
            ];
            $i++;
        }?>
        <?php
                if(Yii::$app->language == 'ru') $daterus = [
                    '1' => 'января',
                    '2' => 'февраля',
                    '3' => 'марта',
                    '4' => 'апреля',
                    '5' => 'мая',
                    '6' => 'июня',
                    '7' => 'июля',
                    '8' => 'августа',
                    '9' => 'сентября',
                    '10' => 'октября',
                    '11' => 'ноября',
                    '12' => 'декабря',
                ];
                if(Yii::$app->language == 'en') $daterus = [
                    '1' => 'january',
                    '2' => 'february',
                    '3' => 'march',
                    '4' => 'april',
                    '5' => 'may',
                    '6' => 'june',
                    '7' => 'july',
                    '8' => 'august',
                    '9' => 'september',
                    '10' => 'oktober',
                    '11' => 'november',
                    '12' => 'desember',
                ];?>
        <section>
            <div class="row">
                <div class="col-7 align-top">
                    <div class="news_content"> 
                        <h2 class="head1" style="text-align: center;"><?= $model->eventLan->title ?></h2>                   
                        <h3 class="mox-justify"><?= $model->eventLan->description ?></h3><br>
                        <h4>Начало: <?= getdate(strtotime($model->start_timedate))['mday'].' '.$daterus[getdate(strtotime($model->start_timedate))['mon']].' '.getdate(strtotime($model->start_timedate))['year'] ?></h4><br>
                        <h4>Звершение: <?= getdate(strtotime($model->end_timedate))['mday'].' '.$daterus[getdate(strtotime($model->end_timedate))['mon']].' '.getdate(strtotime($model->end_timedate))['year'] ?></h4><br>
                        <p class="mox-justify"><?= Html::encode($model->eventLan->content) ?></p><br>
                        <h6><!--Понравилось: <?= Html::encode($model->eventLan->like) ?>, -->Просмотров: <?= Html::encode($model->eventLan->visited) ?>
                        <script type="text/javascript">(function() {
                          if (window.pluso)if (typeof window.pluso.start == "function") return;
                          if (window.ifpluso==undefined) { window.ifpluso = 1;
                            var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                            s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                            s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                            var h=d[g]('body')[0];
                            h.appendChild(s);
                          }})();</script>
                        <div class="pluso" data-background="transparent" data-options="small,round,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook,twitter" data-url="<?= 'aic.s-vfu.ru/'.Url::toRoute('event/view?id=').$model->id ?>" data-title="<?= $model->eventLan->title ?>" data-description="<?= $model->eventLan->description ?>" data-image="<?= 'aic.s-vfu.ru'.$photo->photo_path ?>"></div>
                    </div>
                </div>
                <div class="col-5 align-top">
                    <div class="image-spotlight parbase image">
                        <?php
                            echo Carousel::widget([
                                'items' => $images,
                                'options' => [ 
                                    'style' => 'min-width:300px; max-width:600px; width:100%; float: left; margin-right:20px;', // set the width of the container if you like
                                ],
                            ]);
                            ?>
                    </div>
                </div> 
            </div>
        </section>
    </div>