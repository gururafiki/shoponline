<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <?php if(!empty($name)):?>
        <h3 style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;text-align: center;">Спасибо за обращение, <?=$name?> ! Ожидайте ответ на <?=$phone?></h3>
    <?php endif;?>
    <form class="col-md-12" action="/site/auth" method="get" role="form">
        <div style="clear:both;"></div>
        <div class="input-field col-md-4">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" name="name" type="text" class="validate">
            <label for="icon_prefix">Ваше имя</label>
        </div>
        <div style="clear:both;"></div>
        <div class="input-field col-md-4">
            <i class="material-icons prefix">phone</i>
            <input id="icon_telephone" name="phone" type="tel" class="validate">
            <label for="icon_telephone">Ваш телефон</label>
        </div>
        <div style="clear:both;"></div>
        <div class="input-field col-md-4">
            <i class="material-icons prefix">mail</i>
            <input id="icon_mail" name="mail" type="text" class="validate">
            <label for="icon_mail">E-mail</label>
        </div>
        <div style="clear:both;"></div>
        <div class="input-field col-md-4">
            <i class="material-icons prefix">password</i>
            <input id="icon_password" name="mail" type="password" class="validate">
            <label for="icon_password">Пароль</label>
        </div>
        <div style="clear:both;"></div>
        <div class="input-field col-md-4">
            <i class="material-icons prefix">password</i>
            <input id="icon_password_verify" name="mail" type="password" class="validate">
            <label for="icon_password_verify">Повторите пароль</label>
        </div>
        <div style="clear:both;"></div>
        
        <div class="col-md-4 ">
            <button type="submit" class="btn btn-info waves-effect waves-light">Отправить!</button>
        </div>
    </form>
</div>
