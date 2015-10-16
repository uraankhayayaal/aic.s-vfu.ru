<?php
/* @var $this yii\web\View */
use yii\helpers\Url;
?>

<?php 
$this->title = $model->sectionLan->section_name;
?>
        <?= $this->render('\common\_sidenav.php', ['sections' => $sections, 'model' => $model, ]) ?>
<div class="col-9 scrollcontent">
    <section>
    <?php
    foreach ($mips as $mip) {
                
        echo '<div class="row">
                <div class="col-4 mips_row">
                    <div class="col-3">
                        <img title="machine-connect" alt="Machine Connect" class="" src="'.$mip->photo_path427320.'" width="100%">
                    </div>
                    <div class="col-9 mips_description">
                        <a class="cta head1" href="'.Url::toRoute('mip/view?id=').$mip->id.'">'.$mip->mipLan->company_name.'</a>
                        <p class="mox-justify"><b>'.$mip->mipLan->description.'</b></p>
                        <p class="mox-justify">'.$mip->mipLan->content.'</p>';
                        if($mip->phone != '')echo '<p class="mox-justify"><b>'.$mip->getAttributeLabel('phone').'</b>: '.$mip->phone.'</p>';
                        if($mip->email != '')echo '<p class="mox-justify"><b>'.$mip->getAttributeLabel('email').'</b>: '.$mip->email.'</p>';
                    echo '</div>
                </div>
            </div>';
        $i++;

    }?>
    </section>

</div>
    