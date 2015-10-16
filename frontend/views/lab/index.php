<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>

<?php 
if(Yii::$app->language == 'ru')
$this->title = 'Лаборатории АИЦ';
if(Yii::$app->language == 'en')
$this->title = 'Laboratories of AIC';
?>   
	<section>
    <?php
    foreach ($model as $lab) {
                
        echo '<div class="row">
                <div class="col-4 mips_row">
                    <div class="col-3">
                        <img title="machine-connect" alt="Machine Connect" class="" src="'.$lab->photo_path427320.'" width="100%">
                    </div>
                    <div class="col-9 mips_description">
                        <a class="cta head1" href="'.Url::toRoute('lab/view?id=').$lab->id.'">'.$lab->labLan->company_name.'</a>
                        <p class="mox-justify"><b>'.$lab->labLan->description.'</b></p>
                        <p class="mox-justify">'.$lab->labLan->content.'</p>';
                        if($lab->email != '')echo '<p class="mox-justify"><b>'.$lab->getAttributeLabel('email').'</b>: '.$lab->email.'</p>';
                    echo '</div>
                </div>
            </div>';
        $i++;

    }?>
    </section>
    