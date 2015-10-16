<?php

namespace backend\controllers;

use Yii;
use common\models\Section;
use common\models\Section_ru;
use common\models\Section_en;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * SectionController implements the CRUD actions for Section model.
 */
class SectionController extends Controller
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
     * Lists all Section models.
     * @return mixed
     */

    public function actionIndex()
    {
        return $this->render('index', [
            'model' => Section::find()->all(),
        ]);
    }

    /**
     * Displays a single Section model.
     * @param integer $id
     * @return mixed
     */
    /*public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }*/

    /**
     * Creates a new Section model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $section = new Section();
        $section_ru = new Section_ru();
        $section_en = new Section_en();

        if ($section->load(Yii::$app->request->post())){
            
            $images = UploadedFile::getInstances($section, 'images');
            $newFileName = date("YmdHis");
            $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
            $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            $images[0]->saveAs($filePath);
                Image::thumbnail($filePath, 427, 320)
                    ->save($file427320, ['quality' => 50]);

                $section->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                $section->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
        }

        if ($section->load(Yii::$app->request->post()) && $section_ru->load(Yii::$app->request->post()) && $section_en->load(Yii::$app->request->post()) && $section->save()) {
            
            $section_ru->section_id = $section->id;
            $section_en->section_id = $section->id;

            $section_ru->save();
            $section_en->save();

            return $this->redirect(['update', 'id' => $section->id]);
        } else {
            return $this->render('create', [
                'section' => $section,
                'section_ru' => $section_ru,
                'section_en' => $section_en,
            ]);
        }
    }

    /**
     * Updates an existing Section model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $section = section::find()->where(['id'=>$id])->one();
        $section_ru = section_ru::find()->where(['section_id'=>$id])->one();
        $section_en = section_en::find()->where(['section_id'=>$id])->one();

        if ( !empty(UploadedFile::getInstances($section, 'images')) ){
            if ($section->load(Yii::$app->request->post())){
            
            if(file_exists($path = getcwd().'\..\..'.$section->photo_path)) unlink($path);
            if(file_exists($path = getcwd().'\..\..'.$section->photo_path427320)) unlink($path);

            
                $images = UploadedFile::getInstances($section, 'images');
                $newFileName = date("YmdHis");
                $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $images[0]->extension;
                $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
                $images[0]->saveAs($filePath);
                    Image::thumbnail($filePath, 427, 320)
                        ->save($file427320, ['quality' => 50]);

                    $section->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $images[0]->extension;
                    $section->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $images[0]->extension;
            }
        }

        if (/*$section->load(Yii::$app->request->post()) &&*/ $section_ru->load(Yii::$app->request->post()) && $section_en->load(Yii::$app->request->post()) && $section->save()) {
            $section_ru->save();
            $section_en->save();
            return $this->redirect(['update', 'id' => $section->id]);
        } else {
            return $this->render('update', [
                'section' => $section,
                'section_ru' => $section_ru,
                'section_en' => $section_en,
            ]);
        }
    }

    /**
     * Deletes an existing Section model.
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
     * Finds the Section model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Section the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Section::findOne($id)) !== null) {
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
