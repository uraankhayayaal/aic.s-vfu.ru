<?php

namespace frontend\controllers;
use Yii;

class ProductController extends \yii\web\Controller
{
	public $layout = 'inside';
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    }
}
