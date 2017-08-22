<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title='Наши продукты';

?>
      <div class="col-md-3">
        <div class="sidebar">
          <!-- Subscription widget -->
          <div class="card-panel">
            <div class="row">
              <form class="col-md-12" action="/site/contact" method="post" role="form">
                <h5>Заказать консультацию</h5>
                <h6>Вы можете абсолютно бесплатно заказать консультацию, вписав ваше имя и телефон в поля ниже</h6>
                <br>
                <div class="input-field">
                  <i class="material-icons prefix">account_circle</i>
                  <input id="icon_prefix" name="name" type="text" class="validate">
                  <label for="icon_prefix">Ваше имя</label>
                </div>
                <div class="input-field">
                  <i class="material-icons prefix">phone</i>
                  <input id="icon_telephone" name="phone" type="tel" class="validate">
                  <label for="icon_telephone">Ваш телефон</label>
                </div>
              </form>
              <div class="text-center">
                <button type="button" class="btn btn-info waves-effect waves-light">Заказать звонок!</button>
              </div>
            </div>
          </div>
          <!--/.Subscription widget -->
          <br>
          <!-- Category widget -->
          <div class="collection">
              <?= \app\components\MenuWidget::widget(['tpl' => 'menu','url' => Url::to('') ])?>
          </div>

        </div>
      </div>
      
      <div class="col-md-9">



        <!-- carousel -->
        <div id="carousel-example-generic" class="carousel slide carousel-fade">

          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
            </li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="item active">
              <div class="carousel-caption">
                <div data-animation="animated fadeInRightBig">
                  <h5 class="h5-responsive">Светодиодные лампы</h5>
                </div>

              </div>
            </div>
            <!-- /.item -->

            <!-- Second slide -->
            <div class="item">
              <div class="carousel-caption">
                <div data-animation="animated fadeInDownBig">
                  <h5 class="h5-responsive">LED Driver</h5>
                </div>

              </div>
            </div>
            <!-- /.item -->

            <!-- Third slide -->
            <div class="item">
              <div class="carousel-caption">
                <div data-animation="animated fadeInLeftBig">
                  <h5 class="h5-responsive">DALI Power</h5>
                </div>
              </div>
            </div>
            <!-- /.item -->

          </div>
          <!-- /.carousel-inner -->

          <!-- Controls -->
          <a class="left carousel-control new-control" href="https://mdbootstrap.com/MDB/live/Simple%20ecommerce%20homepage/index.html#carousel-example-generic" role="button" data-slide="prev">
            <span class="fa fa fa-angle-left waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control new-control" href="https://mdbootstrap.com/MDB/live/Simple%20ecommerce%20homepage/index.html#carousel-example-generic" role="button" data-slide="next">
            <span class="fa fa fa-angle-right waves-effect waves-light"></span>
            <span class="sr-only">Previous</span>
          </a>

        </div>
        <!-- /.carousel -->
      <!-- Page Features -->
        <div class="row text-center">
        <?php if(!empty($products) ): ?>
              <?php $j=0; ?>
              <?php foreach($products as $product): ?>
                <div class="col-md-4">
                  <div class="card hoverable">
                    <div class="card-image">
                      <img src="/images/products/<?= $product->photo_1 ?>">
                      <span class="card-title"><?= $product->price ?>₴</span>
                    </div>
                    <div class="card-content">
                        <p><?= $product->type ?> <?= $product->name ?></p>
                    </div>
                    <div class="card-action">
                      <button type="button" class="btn btn-default waves-effect waves-light">Посмотреть</button>
                      <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                    </div>
                  </div>
                </div>
                  <?php 
                      $j++; 
                      if($j%3==0)
                          echo '<div style="clear:both;"></div>';
                  ?>
              <?php endforeach; ?>
              <?php
                  echo \yii\widgets\LinkPager::widget([
                      'pagination' => $pages,
                  ]); 
              ?>
              <div style="clear:both;"></div>
          <?php else:?>
              <h2>Ничего не найдено</h2>
          <?php endif;?>

        </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="first" >
                    <?php foreach($first as $product): ?>
                        <div class="col-md-3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="/images/products/<?= $product->photo_1 ?>">
                                    <span class="btn btn-success waves-effect waves-light waves card-title" style="padding: 2px 2px 2px 2px;"><?= $product->price ?>₴</span>
                                </div>
                                <div class="card-content">
                                    <p><?= $product->type ?> <?= $product->name ?></p>
                                </div>
                                <div class="card-action">
                                    <button type="button" href="<?=\yii\helpers\Url::to(['product/view','id' => $product->id]) ?>" class="btn btn-default waves-effect waves-light add-to-viewed" data-id="<?=$product->id?>">Посмотреть</button>
                                    <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="tab-pane fade" id="second" >
                    <?php foreach($second as $product): ?>
                        <div class="col-md-3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="/images/products/<?= $product->photo_1 ?>">
                                    <span class="btn btn-success waves-effect waves-light waves card-title" style="padding: 2px 2px 2px 2px;"><?= $product->price ?>₴</span>
                                </div>
                                <div class="card-content">
                                    <p><?= $product->type ?> <?= $product->name ?></p>
                                </div>
                                <div class="card-action">
                                    <button type="button" href="<?=\yii\helpers\Url::to(['product/view','id' => $product->id]) ?>" class="btn btn-default waves-effect waves-light add-to-viewed" data-id="<?=$product->id?>">Посмотреть</button>
                                    <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="tab-pane fade" id="third" >
                    <?php foreach($third as $product): ?>
                        <div class="col-md-3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="/images/products/<?= $product->photo_1 ?>">
                                    <span class="btn btn-success waves-effect waves-light waves card-title" style="padding: 2px 2px 2px 2px;"><?= $product->price ?>₴</span>
                                </div>
                                <div class="card-content">
                                    <p><?= $product->type ?> <?= $product->name ?></p>
                                </div>
                                <div class="card-action">
                                    <button type="button" href="<?=\yii\helpers\Url::to(['product/view','id' => $product->id]) ?>" class="btn btn-default waves-effect waves-light add-to-viewed" data-id="<?=$product->id?>">Посмотреть</button>
                                    <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="tab-pane fade" id="fourth" >
                    <?php foreach($fourth as $product): ?>
                        <div class="col-md-3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="/images/products/<?= $product->photo_1 ?>">
                                    <span class="btn btn-success waves-effect waves-light waves card-title" style="padding: 2px 2px 2px 2px;"><?= $product->price ?>₴</span>
                                </div>
                                <div class="card-content">
                                    <p><?= $product->type ?> <?= $product->name ?></p>
                                </div>
                                <div class="card-action">
                                    <button type="button" href="<?=\yii\helpers\Url::to(['product/view','id' => $product->id]) ?>" class="btn btn-default waves-effect waves-light add-to-viewed" data-id="<?=$product->id?>">Посмотреть</button>
                                    <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="tab-pane fade" id="fifth" >
                    <?php foreach($fifth as $product): ?>
                        <div class="col-md-3">
                            <div class="card hoverable">
                                <div class="card-image">
                                    <img src="/images/products/<?= $product->photo_1 ?>">
                                    <span class="btn btn-success waves-effect waves-light waves card-title" style="padding: 2px 2px 2px 2px;"><?= $product->price ?>₴</span>
                                </div>
                                <div class="card-content">
                                    <p><?= $product->type ?> <?= $product->name ?></p>
                                </div>
                                <div class="card-action">
                                    <button type="button" href="<?=\yii\helpers\Url::to(['product/view','id' => $product->id]) ?>" class="btn btn-default waves-effect waves-light add-to-viewed" data-id="<?=$product->id?>">Посмотреть</button>
                                    <button type="button" href="<?= \yii\helpers\Url::to(['cart/add','id' => $product->id]) ?>" class="btn btn-info waves-effect waves-light add-to-cart" data-id="<?=$product->id?>" >Заказать!</button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </div><!--/category-tab-->
      </div>

    </div>
      </div>