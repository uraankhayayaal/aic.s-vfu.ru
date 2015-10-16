<?php

namespace frontend\controllers;
use Yii;
use common\models\Mip;
use common\models\Section;

class MipController extends \yii\web\Controller
{
	public $layout = 'inside';
    public function actionView($id)
    {

    	$mip = mip::find()->where(['id'=>$id])->one();
        return $this->render('view',[
        	'mip' => $mip,
        	'sections' => $sections = Section::find()->all(),
        	]);
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
