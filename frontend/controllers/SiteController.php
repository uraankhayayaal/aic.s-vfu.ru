<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use common\models\Article;
use common\models\Event;
use common\models\Setting;
use common\models\Section;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\Session;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        if (parent::beforeAction($action)) {
            // change layout for error action
            if ($action->id=='error')
                 $this->layout ='inside';
            return true;
        } else {
            return false;
        }
    }
        
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $article = Article::find()->orderBy(['date_time' => SORT_DESC])->one();
        if($article->articlePhotos[0]->photo_path == '') if(Yii::$app->language == 'ru')$articleimage = Yii::getAlias('@resource/img/news_ru.jpg'); else $articleimage = Yii::getAlias('@resource/img/news_en.jpg'); else $articleimage = $article->articlePhotos[0]->photo_path;
        $event = Event::find()->orderBy(['start_timedate' => SORT_ASC])->limit(3)->all();
        $section = Section::find()->limit(8)->all();

        $innovation_text_on_main_page = Setting::find()->where(['key' => 'innovation_text_on_main_page'])->one();
        $cooperation_with_aic = Setting::find()->where(['key' => 'cooperation_with_aic'])->one();
        $fill_in_the_blank = Setting::find()->where(['key' => 'fill_in_the_blank'])->one();
        $find_out_how_we_can_help_you = Setting::find()->where(['key' => 'find_out_how_we_can_help_you'])->one();
        $information_for_Students = Setting::find()->where(['key' => 'information_for_Students'])->one();
        $for_scientists_and_enterpreneurs = Setting::find()->where(['key' => 'for_scientists_and_enterpreneurs'])->one();

        return $this->render('index',[
            'article' => $article,
            'articleimage' => $articleimage,
            'event' => $event,
            'section' => $section,
            'innovation_text_on_main_page' => $innovation_text_on_main_page->settingLan->index,
            'cooperation_with_aic' => $cooperation_with_aic->settingLan->index,
            'fill_in_the_blank' => $fill_in_the_blank->settingLan->index,
            'find_out_how_we_can_help_you' => $find_out_how_we_can_help_you->settingLan->index,
            'information_for_Students' => $information_for_Students->settingLan->index,
            'for_scientists_and_enterpreneurs' => $for_scientists_and_enterpreneurs->settingLan->index,
            ]);
    }

    public function actionLogin()
    {
        $this->layout = "inside";
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }
    
    public function actionSetlang()//переключатель языка
    {
        if (!isset($_GET['lang'])){
            return $this->goBack();// если не выбран язык по методу гет возвращается на страницу(но почему то перенапрвляется на backend)
        }

        $lang=$_GET['lang'];
        $langs=(isset(Yii::$app->params['langs']))?Yii::$app->params['langs']:array();

        if (!isset($langs[$lang])){
            return $this->goBack();//если выбран не правильный язык. здеся тоже касается
        }

        $session = new Session;
        $session->open();
        $session['lang']=$lang;
        return $this->goBack();
    }

    public function actionSignup()
    {
        $this->layout = "inside";
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    public function afterAction($action, $result)
    {
        Yii::$app->getUser()->setReturnUrl(Yii::$app->request->url);
        return parent::afterAction($action, $result);
    } 
}
