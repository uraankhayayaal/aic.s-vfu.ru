<?php

namespace backend\controllers;

class PagesController extends \yii\web\Controller
{
    public function actionMain()
    {
        return $this->render('main');
    }
    public function actionAbout()
    {
        return $this->render('about');
    }
    public function actionHistory()
    {
        return $this->render('history');
    }
    public function actionHwa()
    {
        return $this->render('hwa');
    }
    public function actionPurpose()
    {
        return $this->render('purpose');
    }
    public function actionStructure()
    {
        return $this->render('structure');
    }
    public function actionOreh()
    {
        return $this->render('oreh');
    }
}
