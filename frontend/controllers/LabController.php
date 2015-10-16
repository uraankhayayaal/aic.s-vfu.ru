<?php

namespace frontend\controllers;
use Yii;
use common\models\lab;

class LabController extends \yii\web\Controller
{
	public $layout = "inside";
    public function actionIndex()
    {
    	$labs = lab::find()->all();
        return $this->render('index',[
        	'model' => $labs,
        	]);
    }

    public function actionView($id)
    {
        $lab = lab::find()->where(['id'=>$id])->one();
        return $this->render('view',[
            'lab' => $lab,
            ]);
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
