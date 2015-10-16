<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Setting */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="setting-form row">

    <?php $form = ActiveForm::begin(); ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <div class="col-md-12">
    <?= $form->field($Setting, 'page')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($Setting, 'key')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>
    </div>
    <div class="col-md-12">
    <?= $form->field($Setting_ru, 'index')->widget(\yii\redactor\widgets\Redactor::className(),
    	[
		   'clientOptions' => [
		       'imageUpload' => \yii\helpers\Url::to(['/redactor/upload/image']),
		   ],
		]) ?>    
    </div>
    <div class="col-md-12">
    <?= $form->field($Setting_en, 'index')->widget(\yii\redactor\widgets\Redactor::className()) ?> 
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton($Setting->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $Setting->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
