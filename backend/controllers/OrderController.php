<?php

namespace backend\controllers;

use common\models\order;
use yii\data\ActiveDataProvider;

class OrderController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$provider = new ActiveDataProvider([
		    'query' => Order::find(),
		    'sort'=>[
	            'defaultOrder'=>[
	            	'is_new' => SORT_ASC,
                    'id' => SORT_DESC,
	            ],
	        ],
		    'pagination' => [
		        'pageSize' => 20,
		    ],
		]);
        return $this->render('index',[
        	'dataProvider' => $provider,
        ]);
    }
    public function actionVisit($id)
    {
    	$model = Order::find()->where(['id' => $id])->one();
    	$model->is_new = 1;
    	$model->save();
        //return $this->redirect('/order/index',302);
        $this->redirect(\Yii::$app->urlManager->createUrl("order/index"));
    }

}
