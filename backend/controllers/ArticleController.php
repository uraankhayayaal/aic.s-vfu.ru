<?php

namespace backend\controllers;

use Yii;
use common\models\article;
use common\models\article_ru;
use common\models\article_en;
use common\models\article_photo;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;

/**
 * articleController implements the CRUD actions for article model.
 */
class ArticleController extends Controller
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
     * Lists all article models.
     * @return mixed
     */
    public function actionIndex()
    {
    
        return $this->render('index', [
            'model' => article::find()->orderBy('date_time DESC')->all(),
        ]);
    }

    /*
     * Загрузка Фотографий
     */
    public function Uploadphoto($images, $article_id)
    {
        $i = 0;// счетчик что определить фотографии когда они загружаются второе изображение может перезаписать первую в ту же секунду.
        foreach ($images as $file) {
            $newFileName = date("YmdHis").$i;
            $filePath = Yii::getAlias('@frontend') . '/web/uploads/' . $newFileName . '.' . $file->extension;
            $file427320 = Yii::getAlias('@frontend') . '/web/uploads/427320/' . $newFileName . '.' . $file->extension;
            $file7070 = Yii::getAlias('@frontend') . '/web/uploads/7070/' . $newFileName . '.' . $file->extension;
            $file->saveAs($filePath);
            
                Image::thumbnail($filePath, 427, 320)
                    ->save($file427320, ['quality' => 50]);
                Image::thumbnail($filePath, 70, 70)
                    ->save($file7070, ['quality' => 50]);

                $image = new article_photo();
                $image->article_id = $article_id;
                $image->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $file->extension;
                $image->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $file->extension;
                $image->photo_path7070 = Yii::getAlias('@resource') . '/uploads/7070/' . $newFileName . '.' . $file->extension;
                $image->alt = '';
                if($image->save()) $errorLoadFile = true; else $errorLoadFile = false;
            $i++;
        }
        return $errorLoadFile;
    }

    /**
     * Creates a new article model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        /*$model = new article();
        $model->date_time = date("Y-m-d H:i:s");
        $model->publish_status = 0;
        $model->like = 0;
        $model->visited = 0;

        $photos = new ActiveDataProvider([
                'query' => article_photo::find()->
                    where(['article_id'=>$id]),
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                
                $this->uploadphoto(UploadedFile::getInstances($model, 'images'), $model->id);

            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'photos' => $photos,
            ]);
        }*/
        $article = new article;
        $article_ru = new article_ru;
        $article_en = new article_en;
        /*$photos = new ActiveDataProvider([
                'query' => article_photo::find()->
                    where(['article_id'=>$id]),
        ]);*/

        if ($article->load(Yii::$app->request->post()) && $article_ru->load(Yii::$app->request->post()) && $article_en->load(Yii::$app->request->post())/* && Model::validateMultiple([$article, $article_ru, $article_en])*/) {
            $article->author_id = Yii::$app->user->identity->id;
            $article->date_time = date("Y-m-d H:i:s");

            if( $article->save() )
            {
                $this->uploadphoto(UploadedFile::getInstances($article, 'images'), $article->id);

                $article_ru->article_id = $article->id; 
                $article_ru->publish_status = 0;
                $article_ru->like = 0;
                $article_ru->visited = 0;

                $article_en->article_id = $article->id; 
                $article_en->publish_status = 0;
                $article_en->like = 0;
                $article_en->visited = 0;

                $article_ru->save(); 
                $article_en->save(); 
            }
            return $this->redirect(['update', 'id' => $article->id]);
        } else {
            return $this->render('create', [
                'article' => $article,
                'article_ru' => $article_ru,
                'article_en' => $article_en,
                //  'photos' => $photos,
            ]);
        }
    }

    /**
     * Updates an existing article model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        /*$model = $this->findModel($id);

        $photos = new ActiveDataProvider([
                'query' => article_photo::find()->
                    where(['article_id'=>$id]),
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                $this->uploadphoto(UploadedFile::getInstances($model, 'images'), $model->id);

            return $this->redirect(['update', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'photos' => $photos,
            ]);
        }*/
        $article = article::find()->where(['id'=>$id])->one();
        $article_ru = article_ru::find()->where(['article_id'=>$id])->one();
        $article_en = article_en::find()->where(['article_id'=>$id])->one();
        $photos = new ActiveDataProvider([
                'query' => article_photo::find()->
                    where(['article_id'=>$id]),
        ]);

        if ($article->load(Yii::$app->request->post()) && $article_ru->load(Yii::$app->request->post()) && $article_en->load(Yii::$app->request->post())/* && Model::validateMultiple([$article, $article_ru, $article_en])*/) {
            if( $article->save() )
            {
                $this->uploadphoto(UploadedFile::getInstances($article, 'images'), $article->id);

                $article_ru->save(); 
                $article_en->save(); 
            }
            return $this->redirect(['update', 'id' => $article->id]);
        } else {
            return $this->render('update', [
                'article' => $article,
                'article_ru' => $article_ru,
                'article_en' => $article_en,
                'photos' => $photos,
            ]);
        }
    }

    /**
     * Deletes an existing article model.
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
     * Finds the article model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return article the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = article::findOne($id)) !== null) {
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
