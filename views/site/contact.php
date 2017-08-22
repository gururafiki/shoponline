<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<form class="col-md-6" action="/site/question" method="get" role="form">
    <div class="input-field col-md-8">
        <i class="material-icons prefix">text</i>
        <input id="icon_text" name="subject" type="text" class="validate">
        <label for="icon_text">Тема</label>
    </div>
    <div style="clear:both;"></div>
    <div class="input-field col-md-8">
        <i class="material-icons prefix">body</i>
        <input id="icon_body" name="body" type="text" class="validate">
        <label for="icon_body">Ваш вопрос</label>
    </div>
    <div style="clear:both;"></div>
    <div class="input-field col-md-8">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" name="name" type="text" class="validate">
        <label for="icon_prefix">Ваше имя</label>
    </div>
    <div style="clear:both;"></div>
    <div class="input-field col-md-8">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" name="phone" type="tel" class="validate">
        <label for="icon_telephone">Ваш телефон</label>
    </div>
    <div style="clear:both;"></div>
    <div class="input-field col-md-8">
        <i class="material-icons prefix">mail</i>
        <input id="icon_mail" name="mail" type="text" class="validate">
        <label for="icon_mail">E-mail</label>
    </div>
    <div style="clear:both;"></div>
    
    <div class="col-md-4 ">
        <button type="submit" class="btn btn-info waves-effect waves-light">Отправить!</button>
    </div>
</form>
<div class="col-md-6">
    <div class="col-md-8" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;font-size: 15px;">
        <div class="col-md-2"><i class="material-icons prefix" style="font-size: 35px;">home</i></div>
        <div class="col-md-10" style="margin-top: 3px;">Ул. Политехническая ,33 офис 508</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">mail</i></div>
        <div class="col-md-10" style="margin-top: 3px;">info@electrovolt.kiev.ua</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> +38 (044) 277-49-36</div>
    </div>
    <div style="clear:both;"></div>
    <hr class="col-md-12">
    <div class="col-md-8" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;font-size: 15px;">
        <div class="col-md-2" style="margin-top: 3px;"><i class="material-icons prefix" style="font-size: 35px;">account_circle</i></div>
        <div class="col-md-10" style="margin-top: 3px;">Татьяна Стахова</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">mail</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> tatyana@electrovolt.kiev.ua</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> +38 (067) 466-93-69</div>
    </div>
    <div style="clear:both;"></div>
    <hr class="col-md-12">
    <div class="col-md-8" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;font-size: 15px;">
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">account_circle</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> Инна Шохина</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">mail</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> Inna.Shohina@electrovolt.kiev.ua</div>
        <div style="clear:both;"></div>
        <div class="col-md-2" ><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
        <div class="col-md-10" style="margin-top: 3px;"> +38 (067) 405-03-35</div>
    </div>
</div>