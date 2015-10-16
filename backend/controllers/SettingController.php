<?php

namespace backend\controllers;

use Yii;
use common\models\Setting;
use common\models\Setting_en;
use common\models\Setting_ru;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SettingController implements the CRUD actions for Setting model.
 */
class SettingController extends Controller
{
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

    /**
     * Lists all Setting models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Setting::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Setting model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'Setting' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Setting model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $Setting = new Setting();
        $Setting_en = new Setting_en();
        $Setting_ru = new Setting_ru();

        if ($Setting->load(Yii::$app->request->post()) && $Setting_en->load(Yii::$app->request->post()) && $Setting_ru->load(Yii::$app->request->post()) && $Setting->save()) {
            $Setting_en->setting_id = $Setting->id;
            $Setting_ru->setting_id = $Setting->id;

            $Setting_en->save();
            $Setting_ru->save();

            return $this->redirect(['view', 'id' => $Setting->id]);
        } else {
            return $this->render('create', [
                'Setting' => $Setting,
                'Setting_en' => $Setting_en,
                'Setting_ru' => $Setting_ru,
            ]);
        }
    }

    /**
     * Updates an existing Setting model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $Setting = $this->findModel($id);
        $Setting_ru = Setting_ru::find()->where(['setting_id'=>$id])->one();
        $Setting_en = Setting_en::find()->where(['setting_id'=>$id])->one();

        if ($Setting->load(Yii::$app->request->post()) && $Setting_en->load(Yii::$app->request->post()) && $Setting_ru->load(Yii::$app->request->post()) && $Setting->save()) {

            $Setting_en->save();
            $Setting_ru->save();
            
            return $this->redirect(['view', 'id' => $Setting->id]);
        } else {
            return $this->render('update', [
                'Setting' => $Setting,
                'Setting_en' => $Setting_en,
                'Setting_ru' => $Setting_ru,
            ]);
        }
    }

    /**
     * Deletes an existing Setting model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Setting model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Setting the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Setting::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
