<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\ProductsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'category_name',
            'type',
            'sub_type',
            // 'name',
            // 'spec1_name',
            // 'spec2_name',
            // 'spec3_name',
            // 'spec4_name',
            // 'spec5_name',
            // 'spec6_name',
            // 'spec7_name',
            // 'spec8_name',
            // 'spec9_name',
            // 'spec1_id',
            // 'spec2_id',
            // 'spec3_id',
            // 'spec4_id',
            // 'spec5_id',
            // 'spec6_id',
            // 'spec7_id',
            // 'spec8_id',
            // 'spec9_id',
            // 'keywords',
            // 'describtion',
            // 'photo',
            // 'price',
            // 'popularity',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
