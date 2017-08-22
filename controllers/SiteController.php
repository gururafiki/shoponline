<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Category;
use app\models\Product;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
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

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $categories=Category::find()->all();
        return $this->render('index','categories');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionMessage()
    {   
        $name = Yii::$app->request->get('name');
        $phone = Yii::$app->request->get('phone');
        Yii::$app->mailer->compose()
        ->setFrom('info@electrovolt.kiev.ua')
        ->setTo('info@electrovolt.kiev.ua')
        ->setSubject('У '.$name.' для вас вопрос')
        ->setTextBody('Свяжитесь с '.$phone)
        ->send();

        return $this->render('register',compact('name','phone'));
    }
    public function actionAuth()
    {   
        $name = Yii::$app->request->get('name');
        $password = Yii::$app->request->get('password');

        if(!empty($name) && !empty($password)){
            $error='Well done';
            return $this->render('register',compact('error'));
        }
        else{
            $error='Упс... Что-то пошло не так';
            return $this->render('auth',compact('error'));
        }
    }
    public function actionRegister()
    {   
        $name = Yii::$app->request->get('name');
        $mail = Yii::$app->request->get('mail');
        $phone = Yii::$app->request->get('phone');
        $password = Yii::$app->request->get('password');
        $verify = Yii::$app->request->get('verify');

        if(strlen($name)>5 && strcasecmp($password, $verify)==0 && strlen($password)>4 && strpos($mail,'@')!=false && strpos($mail,'@')!=strlen($mail) && strpos($mail,'@')!=0 && strrpos($mail,'.')!=false && strpos($mail,'@')<strrpos($mail,'.')){
            $error='Well done';
            return $this->render('register',compact('error'));
        }
        elseif(strlen($name)<=5){
            $error='Слишком короткое имя';
            return $this->render('register',compact('error'));
        }
        elseif(strcasecmp($password, $verify)!=0){
            $error='Пароли не совпадают';
            return $this->render('register',compact('error'));
        }
        elseif(strlen($password)<=4){
            $error='Слишком короткий пароль';
            return $this->render('register',compact('error'));
        }
        elseif(strpos($mail,'@')===false || strpos($mail,'@')==strlen($mail) || strpos($mail,'@')==0 || strrpos($mail,'.')===false || strpos($mail,'@')>strrpos($mail,'.')){
            $error='Что-то не так с e-mail';
            return $this->render('register',compact('error'));
        }
        else{
            $error='Упс... Что-то пошло не так';
            return $this->render('register',compact('error'));
        }
        // $name = Yii::$app->request->get('name');
        // $phone = Yii::$app->request->get('phone');
        // Yii::$app->mailer->compose()
        // ->setFrom('inna.shohina@electrovolt.kiev.ua')
        // ->setTo('inna.shohina@electrovolt.kiev.ua')
        // ->setSubject('У '.$name.' для вас вопрос')
        // ->setTextBody('Свяжитесь с '.$phone)
        // ->send();
// 
        // return $this->render('auth',compact('name','phone'));
    }

    public function actionQuestion()
    {
        $name = Yii::$app->request->get('name');
        $mail = Yii::$app->request->get('mail');
        $sender='new_question@electrovolt.kiev.ua';
        $phone = Yii::$app->request->get('phone');
        $subject = Yii::$app->request->get('subject');
        $body = Yii::$app->request->get('body');
        Yii::$app->mailer->compose()
        ->setFrom($sender)
        ->setTo('info@electrovolt.kiev.ua')
        ->setSubject($subject)
        ->setTextBody('Имя: '.$name.' Телефон: '.$phone.' e-mail: '.$mail.' . Вопрос:'. $body)
        ->send();

        return $this->render('register',compact('name','phone'));
    }
    public function actionContact()
    {
        return $this->render('contact');
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
