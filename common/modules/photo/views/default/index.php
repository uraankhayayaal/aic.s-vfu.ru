<?php
use yii\widgets\ActiveForm;
?>
<?php if( $message ) echo 'ваши фотографии успешно загружены'; else { ?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <?= $form->field($model, 'images[]')->fileInput(['multiple' => true, 'accept' => 'image/*']); ?>

    <button>Submit</button>

<?php ActiveForm::end(); }//end if ?>