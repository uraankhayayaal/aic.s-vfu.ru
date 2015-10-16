<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\lab */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lab-form row">
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

    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data', 'onsubmit' => 'setFormSubmitting()']
    ]); ?>
    

    <div class="col-md-6">
        <h3>Русский</h3>

        <?= $form->field($lab_ru, 'title')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_ru, 'company_name')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_ru, 'description')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_ru, 'content')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
    </div>

    <div class="col-md-6">
        <h3>English</h3>

        <?= $form->field($lab_en, 'title')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_en, 'company_name')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_en, 'description')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($lab_en, 'content')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
 
    </div>
    
    <div class="col-md-12">
        <?= $form->field($lab, 'email')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>
    </div>
   
    <div class="col-md-12">
    <?php echo '<label>Начало</label>';
    echo DateTimePicker::widget([
        'model' => $lab,
        'attribute' => 'created_date',
        'language' => 'ru',
        'name' => 'datetime_1',
        'options' => ['placeholder' => 'Select operating time ...'],
        'convertFormat' => true,
        'pluginOptions' => [
            'format' => 'yyyy-MM-dd H:mm:ss',
            'startDate' => '01-Mar-2015 12:00 AM',
            'todayHighlight' => true,
            'todayBtn' => true,
            'autoclose' => true,
        ]
    ]); ?>
    </div>
    <div class="col-md-12">
        <?= $form->field($lab, 'user_id')->dropDownList(
                ArrayHelper::map(User::find()->all(), 'id', 'username')
                )
        ?>
    </div>
    <div class="col-md-12">
        <?=$form->field($lab, 'images[]')->fileInput(['multiple' => false, 'required' => $lab->isNewRecord ? true : false ]) ?>
    </div>

    <div class="col-md-12">
        <p><img src="<?= $lab->photo_path427320 ?>" alt="<?= $lab_ru->title ?>"></p>
    </div>

    <div class="form-group col-md-12">
        <?= Html::submitButton($lab->isNewRecord ? 'Создать' : 'Сохранить', ['class' => $lab->isNewRecord ? 'btn btn-success ntSaveFormsSubmit' : 'btn btn-primary ntSaveFormsSubmit']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
</div>