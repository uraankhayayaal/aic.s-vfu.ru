<?php

namespace frontend\controllers;
use Yii;
use common\models\Event;
use common\models\Event_ru;
use common\models\Event_en;
use common\models\event_photo;
use yii\data\ActiveDataProvider;

class EventController extends \yii\web\Controller
{
	public $layout = 'inside';
    public function actionIndex()
    {
    	$model = event::find()->orderBy(['start_timedate' => SORT_DESC])->all();
        return $this->render('index',[
        	'model' => $model,
            ]);
    }

    public function actionView($id)
    {
        $model = event::find()->where(['id' => $id])->one();
        if (is_null($model)) {
        // 404 HTTP status will be returned
            throw new \yii\web\NotFoundHttpException;
        }
        /*
         * Количество просмотров считается отдельно для русской и отдельно для английской версии
         */
        $Event_ru = Event_ru::find()->where(['event_id' => $id])->one();
        $Event_en = Event_en::find()->where(['event_id' => $id])->one();
        if(Yii::$app->language == 'en'){
            $Event_en->visited++;
            $Event_en->save();
        }elseif(Yii::$app->language == 'ru'){
            $Event_ru->visited++;
            $Event_ru->save();
        }

        $photos =event_photo::find()
                 ->where(['event_id' => $id])
                 ->all();

        //$photos = events_Photo::find(array('events_id' => $id));
        return $this->render('view', [
            'model' => $model,
            'photos' => $photos,
        ]);
    }
	public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
