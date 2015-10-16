<?php

namespace backend\controllers;

use Yii;
use common\models\lab;
use common\models\lab_en;
use common\models\lab_ru;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * LabController implements the CRUD actions for lab model.
 */
class LabController extends Controller
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
     * Lists all lab models.
     * @return mixed
     */
    public function actionIndex()
    {
        $labs = lab::find()->all();

        return $this->render('index', [
            'labs' => $labs,
        ]);
    }

    /**
     * Creates a new lab model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $lab = new lab();
        $lab_ru = new lab_ru();
        $lab_en = new lab_en();

         if ($lab->load(Yii::$app->request->post())){
            
            $images = UploadedFile::getInstances($lab, 'images');
            $newFileName = date("YmdHis");
            $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
            $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            $images[0]->saveAs($filePath);
                Image::thumbnail($filePath, 427, 320)
                    ->save($file427320, ['quality' => 50]);

                $lab->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                $lab->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
        }

        if ($lab->load(Yii::$app->request->post()) && $lab_ru->load(Yii::$app->request->post()) && $lab_en->load(Yii::$app->request->post()) && $lab->save()) {
            
            $lab_ru->lab_id = $lab->id;
            $lab_en->lab_id = $lab->id;

            $lab_ru->save();
            $lab_en->save();

            return $this->redirect(['update', 'id' => $lab->id]);
        } else {
            return $this->render('create', [
                'lab' => $lab,
                'lab_ru' => $lab_ru,
                'lab_en' => $lab_en,
            ]);
        }
    }

    /**
     * Updates an existing lab model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $lab = lab::find()->where(['id'=>$id])->one();
        $lab_ru = lab_ru::find()->where(['lab_id'=>$id])->one();
        $lab_en = lab_en::find()->where(['lab_id'=>$id])->one();
        
        if ( !empty(UploadedFile::getInstances($lab, 'images')) ){
            if ($lab->load(Yii::$app->request->post())){
                if(file_exists($path = getcwd().'\..\..'.$lab->photo_path)) unlink($path);
                if(file_exists($path = getcwd().'\..\..'.$lab->photo_path427320)) unlink($path);
           
                $images = UploadedFile::getInstances($lab, 'images');
                $newFileName = date("YmdHis");
                $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
                $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
                $images[0]->saveAs($filePath);
                    Image::thumbnail($filePath, 427, 320)
                        ->save($file427320, ['quality' => 50]);

                    $lab->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                    $lab->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            }
        }

        if ($lab->load(Yii::$app->request->post()) && $lab_ru->load(Yii::$app->request->post()) && $lab_en->load(Yii::$app->request->post()) && $lab->save()) {

            $lab_ru->save();
            $lab_en->save();

            return $this->redirect(['update', 'id' => $lab->id]);
        } else {
            return $this->render('update', [
                'lab' => $lab,
                'lab_ru' => $lab_ru,
                'lab_en' => $lab_en,
            ]);
        }
    }

    /**
     * Deletes an existing lab model.
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
     * Finds the lab model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return lab the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = lab::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
