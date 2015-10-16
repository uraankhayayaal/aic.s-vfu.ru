<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\news */
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
<div class="news-form row">
    <?php $form = ActiveForm::begin([
        'options' => ['enctype'=>'multipart/form-data', 'onsubmit' => 'setFormSubmitting()']
    ]); ?>
    <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>" />
    <div class="col-md-6">
        <h3>Русский</h3>
        <?= $form->field($article_ru, 'title')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($article_ru, 'description')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($article_ru, 'content')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
    </div>

    <div class="col-md-6">
        <h3>English</h3>
        <?= $form->field($article_en, 'title')->textInput(['maxlength' => true, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($article_en, 'description')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>

        <?= $form->field($article_en, 'content')->textarea(['rows' => 6, 'class' => 'ntSaveForms form-control']) ?>
    </div>
    <div class="col-md-12">
        <?=$form->field($article, 'images[]')->fileInput(['multiple' => true]) ?>
    </div>
    <div class="col-md-12">
    <?= $article->isNewRecord ? '' : GridView::widget([//удаляет не фотографии а новости 
        'dataProvider' => $photos,
        'columns' => [

            [
                'label' => 'Картинка',
                'format' => 'raw',
                'value' => function($photos){
                    return Html::img($photos->photo_path7070,[
                        'alt'=>'yii2 - картинка в gridview',
                        //'style' => 'width:15px;'
                    ]);
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'options' => [
                    'width' => '70px'
                ],
                'buttons' => [
                    'delete' => function ($url, $photos) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>',
                                [
                                    '/article_photo/delete/',
                                    'id' => $photos->id,
                                ],
                                [
                                    'title' => Yii::t('yii', 'Delete'),
                                    'data-pjax' => '0',
                                ]
                            );
                        },
                ]
            ],
        ],
        'tableOptions' => [
            'class' => 'table table-striped table-bordered',
        ],
    ]); ?>
    </div>
    <div class="col-md-12">
    <div class="form-group">
        <?= Html::submitButton($article->isNewRecord ? 'Сздать' : 'Сохранить', ['class' => $article->isNewRecord ? 'btn btn-success ntSaveFormsSubmit' : 'btn btn-primary ntSaveFormsSubmit']) ?>
    </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
