<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Section */
/* @var $form yii\widgets\ActiveForm */
?>
    <script>
    var formSubmitting = false;
    var setFormSubmitting = function() { formSubmitting = true; };

    window.onload = function() {
        window.addEventListener("beforeunload", function (e) {
            var confirmationMessage = 'It looks like you have been editing something. ';
            confirmationMessage += 'If you leave before saving, your changes will be lost.';

            if (formSubmitting) {
                return undefined;
            }

            (e || window.event).returnValue = confirmationMessage; //Gecko + IE
            return confirmationMessage; //Gecko + Webkit, Safari, Chrome etc.
        });
    };
    </script>
<div class="section-form row">

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data', 'onsubmit' => 'setFormSubmitting()']
    ]); ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <div class="col-md-6">
        <h3>Русский</h3>
        <?= $form->field($section_ru, 'section_name')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($section_ru, 'description')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
    </div>

    <div class="col-md-6">
        <h3>English</h3>
        <?= $form->field($section_en, 'section_name')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($section_en, 'description')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
    </div>
    <div class="col-md-12">
    <?=$form->field($section, 'images[]')->fileInput(['multiple' => false]) ?>
    </div>
    <div class="col-md-12">
    <p><img src="<?= $section->photo_path427320 ?>" alt="<?= $section_ru->section_name ?>"></p>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton($section->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $section->isNewRecord ? 'btn btn-success ntSaveFormsSubmit' : 'btn btn-primary ntSaveFormsSubmit']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
