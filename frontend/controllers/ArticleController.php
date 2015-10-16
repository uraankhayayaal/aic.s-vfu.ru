<?php

namespace frontend\controllers;
use Yii;
use common\models\Article;
use common\models\Article_ru;
use common\models\Article_en;
use common\models\Article_photo;
use yii\data\ActiveDataProvider;

class ArticleController extends \yii\web\Controller
{
	public $layout = 'inside';
    public function actionIndex()
    {
    	$model = Article::find()->orderBy(['date_time' => SORT_DESC])->all();
        return $this->render('index', [
            'model' => $model,
        ]);
    }

    public function actionView($id)
    {
        $model = Article::find()->where(['id' => $id])->one();
        if (is_null($model)) {
        // 404 HTTP status will be returned
            throw new \yii\web\NotFoundHttpException;
        }
        /*
         * Количество просмотров считается отдельно для русской и отдельно для английской версии
         */
        $article_ru = Article_ru::find()->where(['article_id' => $id])->one();
        $article_en = Article_en::find()->where(['article_id' => $id])->one();
        if(Yii::$app->language == 'en'){
            $article_en->visited++;
            $article_en->save();
        }elseif(Yii::$app->language == 'ru'){
            $article_ru->visited++;
            $article_ru->save();
        }
        
        $photos =Article_photo::find()
                 ->where(['article_id' => $id])
                 ->all();

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
