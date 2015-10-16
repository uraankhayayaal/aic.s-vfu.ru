<?php

namespace frontend\controllers;
use Yii;
use common\models\mip;
use common\models\section;

class SectionController extends \yii\web\Controller
{
	public $layout = "inside";
    public function actionIndex()
    {
    	$sections = Section::find()->all();
        $model = Section::find()->where(['id' => $id])->one();
        $mips = Mip::find()->all();
        return $this->render('index',[
        	'sections' => $sections,
            'model' => $model,
            'mips' => $mips,
        	]);
    }

    public function actionView($id)
    {
        $sections = Section::find()->all();
        $model = Section::find()->where(['id' => $id])->one();
        $mips = Mip::find()->where(['section_id' => $id])->all();
        return $this->render('view',[
            'sections' => $sections,
            'model' => $model,
            'mips' => $mips,
            ]);
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
