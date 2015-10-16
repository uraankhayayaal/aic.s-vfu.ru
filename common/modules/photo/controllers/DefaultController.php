<?php

namespace common\modules\photo\controllers;

use Yii;
use yii\web\UploadedFile;
use yii\web\Controller;
use common\models\Photo;

class DefaultController extends Controller
{
    public function actionIndex()
    {

        $model = new Photo();
        $message = false;

        if (Yii::$app->request->isPost) {
            $model->images = UploadedFile::getInstances($model, 'images');
            if ($model->upload()) {
                // file is uploaded successfully
                //return $this->render('index', ['message' => true]);
                $message = true;
            }
        }

        return $this->render('index', ['model' => $model, 'message' => $message]);
    }
}
