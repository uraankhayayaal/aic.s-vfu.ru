<?php

namespace frontend\controllers;

use Yii;
use common\models\Order;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * OrderController implements the CRUD actions for Order model.
 */
class OrderController extends Controller
{
    public $layout = 'inside';
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    public function actionCreate()
    {
        $model = new Order();

        $model->send_at = date("Y-m-d H:i:s");

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->render('thank');
        } else {
            return $this->render('create', [
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
