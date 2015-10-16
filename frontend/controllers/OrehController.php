<?php

namespace frontend\controllers;
use frontend\models\ContactForm;
use Yii;

class OrehController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                //Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                //Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->render('//order/thank');
        } else {
            return $this->render('index', [
                'model' => $model,
            ]);
        }
    }
     public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    }
}
