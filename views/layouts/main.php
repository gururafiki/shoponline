<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\bootstrap\Modal;//?
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Dropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Electrovolt',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar z-depth-2 info-color',
        ],
        'renderInnerContainer' => true,
        'innerContainerOptions' => [
            'class' => 'container'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'nav navbar-nav'],
        'items' => [
            ['label' => 'Домой', 'url' => ['/category/index'], 'options' => ['class' => 'waves-effect waves-light' ] ] ,
            ['label' => 'О нас', 'url' => ['/site/about'],  'options' => ['class' => 'waves-effect waves-light' ] ],
            ['label' => 'Корзина', 'url' => ['#'],  'options' => ['class' => 'waves-effect waves-light', 'onclick' => 'return getCart()' ] ],
            ['label' => 'Контакты', 'url' => ['/site/contact'], 'options' => ['class' => 'waves-effect waves-light' ]],
            '<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-light" role="button" aria-expanded="false">Наши услуги<span class="caret"></span></a>'
            .Dropdown::widget([
                'items' => [
                    ['label' => 'Светодиодное освещение', 'url' => '#'],
                    ['label' => 'Светодиодная лента', 'url' => '#blazers'],
                    ['label' => 'Светодиодные лампы', 'url' => '#'],
                    ['label' => 'Светодиодные светильники', 'url' => '#'],
                    ['label' => 'Светодиодная реклама', 'url' => '#'],
                    ['label' => 'Источники питания', 'url' => '#'],
                ],
            ])
            .'</li>',
            Yii::$app->user->isGuest ? (
                ['label' => 'Авторизация', 'url' => ['/site/login'], 'options' => ['class' => 'waves-effect waves-light' ]]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Выход (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'nav-btn waves-effect waves-light']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    // echo '<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-light" role="button" aria-expanded="false">List <span class="caret"></span></a>';
    // echo Dropdown::widget([
    //     'items' => [
    //         ['label' => 'DropdownA', 'url' => '/'],
    //         ['label' => 'DropdownB', 'url' => '#'],
    //         ['label' => 'DropdownC', 'url' => '/'],
    //         ['label' => 'DropdownD', 'url' => '#'],
    //     ],
    // ]);
    // echo  '</li>';
    ActiveForm::begin(
        [
            'action' => ['category/search'],
            'method' => 'get',
            'options' => [ 'class' => 'navbar-form navbar-right waves-effect waves-light']
        ]
    );
    echo '<div class="form-group">';
    echo Html::input(
        'text',
        'search',
        '',
        [
            'placeholder' => 'Поиск',
            'class' => 'form-control'
        ]
    );
    echo '</div>';
    ActiveForm::end();

    NavBar::end();
    ?>
    <div class="row">
        <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
            <img style="margin-left: 0px;" src="https://t4.ftcdn.net/jpg/01/10/17/41/240_F_110174137_wFEAVuUxtWevbgvVgyaxMYMxNWAslWsX.jpg" alt="">
        </div>
        <div class="col-md-7 col-lg-7 col-sm-12 col-xs-12">
            <h3 style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;text-align: center;">ElectroVolt</h3>
            <form class="col-md-12" action="/site/message" method="get" role="form">
                <div class="input-field col-md-4">
                    <i class="material-icons prefix">account_circle</i>
                    <input id="icon_prefix" name="name" type="text" class="validate">
                    <label for="icon_prefix">Ваше имя</label>
                </div>
                <div class="input-field col-md-4">
                    <i class="material-icons prefix">phone</i>
                    <input id="icon_telephone" name="phone" type="tel" class="validate">
                    <label for="icon_telephone">Ваш телефон</label>
                </div>
                <div class="text-center col-md-4">
                    <button type="submit" class="btn btn-info waves-effect waves-light">Заказать звонок!</button>
                </div>
                <div class="text-center col-md-12">
                    <div class="col-md-4" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;text-align: center;font-size: 15px;">
                        <div class="col-md-2" style="margin-top: 3px;"><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
                        <div class="col-md-10">Главный офис<br> +38 (044) 277-49-36</div>
                    </div>
                    <div class="col-md-4" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;text-align: center;font-size: 15px;">
                        <div class="col-md-2" style="margin-top: 3px;"><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
                        <div class="col-md-10">Татьяна Павловна<br> +38 (067) 466-93-69</div>
                    </div>
                    <div class="col-md-4" style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;text-align: center;font-size: 15px;">
                        <div class="col-md-2" style="margin-top: 3px;"><i class="material-icons prefix" style="font-size: 35px;">phone</i></div>
                        <div class="col-md-10">Инна Васильевна<br> +38 (067) 405-03-35</div>
                    </div>
                </div>
            </form>
        </div>
        <div title="Курс валют от ПриватБанк Украина" style="position: absolute;right: 0;" class="course btn btn-info waves-effect waves-light col-sm-12 col-lg-3 col-xs-12 col-md-3 hidden-xs hidden-sm">
            <?php
                // $data=file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
                // $courses=json_decode($data,true);
                // echo '<div class="table-responsive"><table class="table"><thead><tr><th>Валюта</th><th>Покупка</th><th>Продажа</th></tr></thead><tbody>';
                // foreach ($courses as $key_nominals=>$array_nominals){
                //     echo '<tr>';
                //     foreach ($array_nominals as $key => $value){
                //         if($key!='base_ccy')
                //             echo '<td>'.$value.'</td>';
                //     }
                //     echo '</tr>';
                // }
                // echo '</tbody></table></div>';
            ?>
        </div>
    </div>
    <div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<!-- <footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer> -->
<footer class="page-footer info-color darken-1" if="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-md-offset-1">
          <p class="white-text center-on-small-only">О компании</p>
          <p class="white-text center-on-small-only">Получите полный перечень гарантий и услуг.</p>
          <a href="http://mdbootstrap.com/getting-started/" class="btn btn-danger waves-effect waves-light">Перейти!</a>

        </div>
        <hr class="hidden-lg hidden-md">

        <div class="col-md-5 text-center">
          <p class="white-text center-on-small-only">Ответы на вопросы</p>
          <ul>
            <li><a href="https://mdbootstrap.com/MDB/live/Simple%20ecommerce%20homepage/index.html#" data-toggle="modal" data-target="#myModal" class="grey-text text-lighten-3">Обратная связь</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/material-design-for-bootstrap/" target="_blank">Условия доставки</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/forums/forum/support/" target="_blank">Поддержка клиентов</a>
            </li>
            <li><a class="grey-text text-lighten-3" href="http://mdbootstrap.com/forums/forum/bugs/" target="_blank">Сообщить об ошибке</a>
            </li>


          </ul>
        </div>
        <hr class="hidden-lg hidden-md">

        <div class="col-md-3 text-center">
          <p class="white-text text-center"> Социальные сети</p>
          <a target="_blank" href="https://www.facebook.com/mdbootstrap" class="btn-floating btn-large fb-bg waves-effect waves-light"><i class="fa fa-facebook"> </i></a>
          <a target="_blank" href="https://twitter.com/MDBootstrap" class="btn-floating btn-large tw-bg waves-effect waves-light"><i class="fa fa-twitter"> </i></a>
          <a target="_blank" href="https://plus.google.com/u/0/b/107863090883699620484/107863090883699620484/posts" class="btn-floating btn-large gplus-bg waves-effect waves-light"><i class="fa fa-google-plus"> </i></a>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="col-md-10 col-md-offset-1"> © 2015 Copyright <a href="http://www.mdbootstrap.com/">Electrovolt </a>
        </div>
      </div>
    </div>
  </footer>
  <?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h2>Корзина</h2>',
        'id' => 'cart',
        'size' => 'modal-lg',
        'footer' => '
            <button style="margin-bottom: 0;" class="btn btn-danger waves-effect waves-light" onclick="clearCart()">Очистить</button>
            <button class="btn btn-default waves-effect waves-light" data-dismiss="modal">Вернуться</button>
            <button class="btn btn-success waves-effect waves-light">Оформить заказ</button>'
    ]);
    \yii\bootstrap\Modal::end();
  ?>
  <?php
    \yii\bootstrap\Modal::begin([
        'header' => '<h5>Просмотр товара</h5>',
        'id' => 'product-card',
        'size' => 'modal-lg',
        'footer' => '
            <button style="margin-bottom: 0;" class="btn btn-danger waves-effect waves-light" onclick="clearCart()">Очистить</button>
            <button class="btn btn-default waves-effect waves-light" data-dismiss="modal">Вернуться</button>
            <button class="btn btn-success waves-effect waves-light">Оформить заказ</button>'
    ]);
    \yii\bootstrap\Modal::end();
  ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
