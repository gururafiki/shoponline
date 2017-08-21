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
        <!-- /.row -->
        <div class="category-tab"><!--category-tab-->
            <div class="col-sm-12">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tshirt" data-toggle="tab">Освещение</a></li>
                    <li><a href="#blazers" data-toggle="tab">Ленты</a></li>
                    <li><a href="#sunglass" data-toggle="tab">Лампы</a></li>
                    <li><a href="#kids" data-toggle="tab">Светильники</a></li>
                    <li><a href="#poloshirt" data-toggle="tab">Реклама</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active in" id="tshirt" >
                    <div class="col-sm-4">
                        <div class="card hoverable">
                          <div class="card-image">
                            <img src="/images/product1.png">
                            <span class="card-title">25₴</span>
                          </div>
                          <div class="card-content">
                            <p>Продукт компании Electrovolt</p>
                          </div>
                          <div class="card-action">
                            <button type="button" class="btn btn-default waves-effect waves-light">Посмотреть</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Заказать!</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card hoverable">
                          <div class="card-image">
                            <img src="/images/product1.png">
                            <span class="card-title">25₴</span>
                          </div>
                          <div class="card-content">
                            <p>Продукт компании Electrovolt</p>
                          </div>
                          <div class="card-action">
                            <button type="button" class="btn btn-default waves-effect waves-light">Посмотреть</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Заказать!</button>
                          </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card hoverable">
                          <div class="card-image">
                            <img src="/images/product1.png">
                            <span class="card-title">25₴</span>
                          </div>
                          <div class="card-content">
                            <p>Продукт компании Electrovolt</p>
                          </div>
                          <div class="card-action">
                            <button type="button" class="btn btn-default waves-effect waves-light">Посмотреть</button>
                            <button type="button" class="btn btn-info waves-effect waves-light">Заказать!</button>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="blazers" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="sunglass" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kids" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="poloshirt" >
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="/images/product1.png" style="width:100%; height: auto;" alt="" />
                                    <h2>$56</h2>
                                    <p>Продукт компании Electrovolt</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i> В корзину!</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/category-tab-->
      </div>