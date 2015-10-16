<?php

namespace backend\controllers;

use Yii;
use common\models\event_photo;

class Event_photoController extends \yii\web\Controller
{
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->goBack();
    }
    protected function findModel($id)
    {
        if (($model = event_photo::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

}
