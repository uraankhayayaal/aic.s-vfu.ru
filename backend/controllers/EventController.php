<?php

namespace backend\controllers;

use Yii;
use common\models\Event;
use common\models\Event_photo;
use common\models\Event_ru;
use common\models\Event_en;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\imagine\Image;
use yii\base\Model;

/**
 * eventController implements the CRUD actions for event model.
 */
class EventController extends Controller
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
     * Lists all event models.
     * @return mixed
     */
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => Event::find()->orderBy('start_timedate DESC')->all(),
        ]);
    }
    /*
     * Загрузка Фотографий
     */
    public function Uploadphoto($images, $id)
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

                $image = new event_photo();
                $image->event_id = $id;
                $image->photo_path = Yii::getAlias('@resource') . '/uploads/' . $newFileName . '.' . $file->extension;
                $image->photo_path427320 = Yii::getAlias('@resource') . '/uploads/427320/' . $newFileName . '.' . $file->extension;
                $image->photo_path7070 = Yii::getAlias('@resource') . '/uploads/7070/' . $newFileName . '.' . $file->extension;
                $image->alt = '';
                if($image->save()) $errorLoadFile = true; else $errorLoadFile = false;
            $i++;
        }
        return $errorLoadFile;
    }

    public function actionCreate()
    {
        $event = new Event;
        $event_ru = new Event_ru;
        $event_en = new Event_en;
        $photos = new ActiveDataProvider([
                'query' => event_photo::find()->
                    where(['event_id'=>$id]),
        ]);

        if ($event->load(Yii::$app->request->post()) && $event_ru->load(Yii::$app->request->post()) && $event_en->load(Yii::$app->request->post())/* && Model::validateMultiple([$event, $event_ru, $event_en])*/) {
            $event->author_id = Yii::$app->user->identity->id;

            if($event->save())
            {

                $this->uploadphoto(UploadedFile::getInstances($event, 'images'), $event->id);

                $event_ru->event_id = $event->id; 
                $event_ru->publish_status = 0;
                $event_ru->like = 0;
                $event_ru->visited = 0;

                $event_en->event_id = $event->id; 
                $event_en->publish_status = 0;
                $event_en->like = 0;
                $event_en->visited = 0;

                $event_ru->save(); 
                $event_en->save(); 
            }

            return $this->redirect(['update', 'id' => $event->id]);
        } else {
            return $this->render('create', [
                'event' => $event,
                'event_ru' => $event_ru,
                'event_en' => $event_en,
                'photos' => $photos,
            ]);
        }
    }

    /**
     * Updates an existing event model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        /*$model = $this->findModel($id);

        $photos = new ActiveDataProvider([
                'query' => event_photo::find()->
                    where(['event_id'=>$id]),
        ]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

                $this->uploadphoto(UploadedFile::getInstances($model, 'images'), $model->id);

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'photos' => $photos,
            ]);
        }*/
        $event = Event::find()->where(['id'=>$id])->one();
        $event_ru = Event_ru::find()->where(['event_id'=>$id])->one();
        $event_en = Event_en::find()->where(['event_id'=>$id])->one();
        $photos = new ActiveDataProvider([
                'query' => event_photo::find()->
                    where(['event_id'=>$id]),
        ]);

        if ($event->load(Yii::$app->request->post()) && $event_ru->load(Yii::$app->request->post()) && $event_en->load(Yii::$app->request->post())/* && Model::validateMultiple([$event, $event_ru, $event_en])*/) {
            $event->author_id = Yii::$app->user->identity->id;

            if ($event->save())
            {
                $this->uploadphoto(UploadedFile::getInstances($event, 'images'), $event->id);

                $event_ru->save(); 
                $event_en->save(); 
            }

            return $this->redirect(['update', 'id' => $event->id]);
        } else {
            return $this->render('update', [
                'event' => $event,
                'event_ru' => $event_ru,
                'event_en' => $event_en,
                'photos' => $photos,
            ]);
        }
    }

    /**
     * Deletes an existing event model.
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
     * Finds the event model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return event the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Event::findOne($id)) !== null) {
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
