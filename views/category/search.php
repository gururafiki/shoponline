<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title='Поиск';

?>
      <h5>Результаты поиска по запросу: <?=$search?></h5>
      <div class="col-md-3">
        <div class="sidebar">
          <div class="collection">
            <?php $j=0; ?>
            <?php foreach ($categories as $category):?>
              <?php $j++; ?>
                <a href="/category/<?=$j ?>/0" class="collection-item"><?=$category->name ?></a>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-md-9">
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