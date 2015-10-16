<?php

namespace frontend\controllers;
use common\models\Setting;
use Yii;

class AboutController extends \yii\web\Controller
{
    private $actions =['History', 'Hwa', 'About', 'purpose', 'structure'];
    public $layout = "inside";

    public function actionHistory()
    {
        $bottom_history = Setting::find()->where(['key' => 'bottom_history'])->one();
        $history_name = Setting::find()->where(['key' => 'history_name'])->one();

        return $this->render('history',[
            'bottom_history' => $bottom_history->settingLan->index,
            'history_name' => $history_name->settingLan->index,
            ]);
    }

    public function actionHwa()
    {
        switch (Yii::$app->language) {
        case 'ru':
            return $this->render('hwa'); break;
        case 'en':
            return $this->render('hwa_en'); break;
        }
    }

    public function actionIndex()
    {
        $vison = Setting::find()->where(['key' => 'vison'])->one();
        $vison_content = Setting::find()->where(['key' => 'vison_content'])->one();
        $mission = Setting::find()->where(['key' => 'mission'])->one();
        $mission_content = Setting::find()->where(['key' => 'mission_content'])->one();
        $purpose = Setting::find()->where(['key' => 'purpose'])->one();
        $purpose_content = Setting::find()->where(['key' => 'purpose_content'])->one();
        $tasks = Setting::find()->where(['key' => 'tasks'])->one();
        $tasks_content = Setting::find()->where(['key' => 'tasks_content'])->one();
        $about_name = Setting::find()->where(['key' => 'about_name'])->one();

        return $this->render('index',[
            'vison' => $vison->settingLan->index,
            'vison_content' => $vison_content->settingLan->index,
            'mission' => $mission->settingLan->index,
            'mission_content' => $mission_content->settingLan->index,
            'purpose' => $purpose->settingLan->index,
            'purpose_content' => $purpose_content->settingLan->index,
            'tasks' => $tasks->settingLan->index,
            'tasks_content' => $tasks_content->settingLan->index,
            'about_name' => $about_name->settingLan->index,
            ]);
    }

    public function actionPurpose()        
    {
        $left_purpose = Setting::find()->where(['key' => 'left_purpose'])->one();
        $mid_purpose = Setting::find()->where(['key' => 'mid_purpose'])->one();
        $right_purpose = Setting::find()->where(['key' => 'right_purpose'])->one();
        $bottom_purpose = Setting::find()->where(['key' => 'bottom_purpose'])->one();
        $purpose_name = Setting::find()->where(['key' => 'purpose_name'])->one();
        $name_p1 = Setting::find()->where(['key' => 'name_p1'])->one();
        $name_p2 = Setting::find()->where(['key' => 'name_p2'])->one();
        $name_p3 = Setting::find()->where(['key' => 'name_p3'])->one();

        return $this->render('purpose',[
            'left_purpose' => $left_purpose->settingLan->index,
            'mid_purpose' => $mid_purpose->settingLan->index,
            'right_purpose' => $right_purpose->settingLan->index,
            'bottom_purpose' => $bottom_purpose->settingLan->index,
            'purpose_name' => $purpose_name->settingLan->index,
            'name_p1' => $name_p1->settingLan->index,
            'name_p2' => $name_p2->settingLan->index,
            'name_p3' => $name_p3->settingLan->index,
            ]);
    }

    public function actionStructure()
    {
        switch (Yii::$app->language) {
        case 'ru':
            return $this->render('structure'); break;
        case 'en':
            return $this->render('structure_en'); break;
        }
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 

}
