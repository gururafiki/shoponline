<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\backend\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Продукт';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">
    <a class="btn btn-default waves-effect waves-light" href="/backend/categories" title="" rel="nofollow">Редактировать категории</a>
    <a class="btn btn-danger waves-effect waves-light" href="/backend/products" title="" rel="nofollow">Редактировать продукты</a>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить продукт', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'category_id',
                'value' => 'idCategories.name',
                'filter' => $arrCategories,
            ],
            //'category_id',
            'type',
            'sub_type',
            'name',
            'specs',
            'keywords',
            'describtion',
            'photo',
            'price',
            'popularity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
