<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Electrovolt';
?>
		<div class="row text-center">
          <?php if(!empty($products) ): ?>
              <?php $j=0; ?>
              <?php foreach($products as $product): ?>
                <div class="col-md-4">
                  <div class="card hoverable">
                    <div class="card-image">
                      <img src="/images/product1.png">
                      <span class="card-title">25₴</span>
                    </div>
                    <div class="card-content">
                      <p><?= $product->name ?></p>
                    </div>
                    <div class="card-action">
                      <button type="button" class="btn btn-default waves-effect waves-light">Посмотреть</button>
                      <button type="button" class="btn btn-info waves-effect waves-light">Заказать!</button>
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
        <table class="table table-striped table-condensed table-bordered table-hover"><tbody>
		   <thead>
		    <tr>
		      <th>Фото</th>
		      <th>id</th>
		      <th>Имя</th>
		      <th>id категории</th>
		      <th>Цена</th>
		      <th>Тип</th>
		      <th>Под тип</th>
		      <th>Описание</th>
		      <th>Ключевые слова</th>
		      <th>Спецификация</th>
		      <th>Популярность</th>
		      <th>Редактирование</th>
		    </tr>
		  </thead>
              <?php $j=0; ?>
              <?php foreach($products as $product): ?>
              	<tr>
                	<td><?=$product->name ?></td><!--<th>Фото</th> -->
                	<td><?=$product->id ?></td><!--<th>id</th> -->
                	<td><?=$product->name ?></td><!--<th>Имя</th> -->
                	<td><?=$product->category_id ?></td><!--<th>id категории</th> -->
                	<td><?=$product->name ?></td><!--<th>Цена</th> -->
                	<td><?=$product->type ?></td><!--<th>Тип</th> -->
                	<td><?=$product->sub_type ?></td><!--<th>Под тип</th> -->
                	<td><?=$product->describtion ?></td><!--<th>Описание</th> -->
                	<td><?=$product->keywords ?></td><!--<th>Ключевые слова</th> -->
                	<td><?=$product->specs ?></td><!--<th>Спецификация</th> -->
                	<td><?=$product->name ?></td><!--<th>Популярность</th> -->
                	<td><?=$product->name ?></td><!--<th>Редактирование</th> -->
                </tr>
              <?php endforeach; ?>
		  </tbody></table>