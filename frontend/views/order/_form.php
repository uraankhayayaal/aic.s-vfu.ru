<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?php 
            if(Yii::$app->language == 'ru') echo $form->field($model, 'type')->dropDownList($model->question[0])->label('');
            if(Yii::$app->language == 'en') echo $form->field($model, 'type')->dropDownList($model->question[1])->label('');
    ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true, 'placeholder' => $model->getAttributeLabel('first_name')])->label('') ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true, 'placeholder' => $model->getAttributeLabel('last_name')])->label('') ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true, 'placeholder' => $model->getAttributeLabel('email')])->label('') ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true, 'placeholder' => $model->getAttributeLabel('phone')])->label('') ?>

    <?= $form->field($model, 'text')->textArea(['rows' => 8, 'placeholder' => $model->getAttributeLabel('text')])->label('') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'OK' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>
