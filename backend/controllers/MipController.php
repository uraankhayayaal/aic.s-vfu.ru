<?php

namespace backend\controllers;

use Yii;
use common\models\mip;
use common\models\mip_en;
use common\models\mip_ru;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * mipController implements the CRUD actions for mip model.
 */
class MipController extends Controller
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
     * Lists all mip models.
     * @return mixed
     */
    public function actionIndex()
    {
        $mips = mip::find()->orderBy('id DESC')->all();

        return $this->render('index', [
            'mips' => $mips,
        ]);
    }

    /**
     * Creates a new mip model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $mip = new mip();
        $mip_ru = new mip_ru();
        $mip_en = new mip_en();

         if ($mip->load(Yii::$app->request->post())){
            
            $images = UploadedFile::getInstances($mip, 'images');
            $newFileName = date("YmdHis");
            $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
            $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            $images[0]->saveAs($filePath);
                Image::thumbnail($filePath, 427, 320)
                    ->save($file427320, ['quality' => 50]);

                $mip->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                $mip->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
        }

        if ($mip->load(Yii::$app->request->post()) && $mip_ru->load(Yii::$app->request->post()) && $mip_en->load(Yii::$app->request->post()) && $mip->save()) {
            
            $mip_ru->mip_id = $mip->id;
            $mip_en->mip_id = $mip->id;

            $mip_ru->save();
            $mip_en->save();

            return $this->redirect(['update', 'id' => $mip->id]);
        } else {
            return $this->render('create', [
                'mip' => $mip,
                'mip_ru' => $mip_ru,
                'mip_en' => $mip_en,
            ]);
        }
    }

    /**
     * Updates an existing mip model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $mip = mip::find()->where(['id'=>$id])->one();
        $mip_ru = mip_ru::find()->where(['mip_id'=>$id])->one();
        $mip_en = mip_en::find()->where(['mip_id'=>$id])->one();
        
        if ( !empty(UploadedFile::getInstances($mip, 'images')) ){
            if ($mip->load(Yii::$app->request->post())){
                if(file_exists($path = getcwd().'\..\..'.$mip->photo_path)) unlink($path);
                if(file_exists($path = getcwd().'\..\..'.$mip->photo_path427320)) unlink($path);
           
                $images = UploadedFile::getInstances($mip, 'images');
                $newFileName = date("YmdHis");
                $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
                $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
                $images[0]->saveAs($filePath);
                    Image::thumbnail($filePath, 427, 320)
                        ->save($file427320, ['quality' => 50]);

                    $mip->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                    $mip->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            }
        }

        if ($mip->load(Yii::$app->request->post()) && $mip_ru->load(Yii::$app->request->post()) && $mip_en->load(Yii::$app->request->post()) && $mip->save()) {

            $mip_ru->save();
            $mip_en->save();

            return $this->redirect(['update', 'id' => $mip->id]);
        } else {
            return $this->render('update', [
                'mip' => $mip,
                'mip_ru' => $mip_ru,
                'mip_en' => $mip_en,
            ]);
        }
    }

    /**
     * Deletes an existing mip model.
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
     * Finds the mip model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return mip the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = mip::findOne($id)) !== null) {
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
