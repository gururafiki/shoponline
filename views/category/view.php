<?php

use yii\helpers\Html;
use yii\helpers\Url;
$this->title='Наши продукты';

?>
      <?= $button ?>
      <div class="col-md-3">
          <?=$spec_str?>
        <div class="sidebar">
          <div class="collection">
            <?= \app\components\MenuWidget::widget(['tpl' => 'menu','url' => Url::to('') ])?>
<!--            --><?php //$j=0; ?>
<!--            --><?php //foreach ($categories as $category):?>
<!--              --><?php //$j++; ?>
<!--              --><?php //if($id==$j): ?>
<!--                <a href="/category/--><?//=$j ?><!--/0" class="collection-item active">--><?//=$category->name ?><!--</a>-->
<!--              --><?php //else:?>
<!--                <a href="/category/--><?//=$j ?><!--/0" class="collection-item">--><?//=$category->name ?><!--</a>-->
<!--              --><?php //endif;?>
<!--            --><?php //endforeach; ?>
          </div>
        </div>
      </div>
      <div class="col-md-9">
      <!-- Page Features -->
        <div class="row text-center">
          <?php if(!empty($products) ): ?>
              <?php $j=0; ?>
              <?php foreach($products as $product): ?>
                <div class="col-md-3">
                  <div class="card hoverable">
                    <div class="card-image">
                      <span class="btn btn-success waves-effect waves-light waves card-title" style="top: 0;left: inherit;bottom: inherit;padding: 5px 5px 5px 10px;"><?= $product->price ?>₴</span>
                      <img src="/images/products/<?= $product->photo_1 ?>">
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
                  <?php 
                      $j++; 
                      if($j%4==0)
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
                    <li class="active"><a href="#first" data-toggle="tab">Источники питания</a></li>
                    <li><a href="#second" data-toggle="tab">Светодиодные ленты</a></li>
                    <li><a href="#third" data-toggle="tab">Светодиоды</a></li>
                    <li><a href="#fourth" data-toggle="tab">Модули</a></li>
                    <li><a href="#fifth" data-toggle="tab">Коробочки</a></li>
                </ul>
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