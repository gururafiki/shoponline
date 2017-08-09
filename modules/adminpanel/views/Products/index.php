<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\adminpanel\models\ProductsSearch */
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
            'name',
            [
                'attribute' => 'category_id',
                'value' => 'idCategories.name',
                'filter' => $arrCategories,
            ],
            'category_name',
            'type',
             'price',
             'popularity',
             'keywords',
             'describtion:ntext',
            //'sub_type',
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
            // 'spec10_name',
            // 'spec11_name',
            // 'spec12_name',
            // 'spec13_name',
            // 'spec14_name',
            // 'spec15_name',
            // 'spec16_name',
            // 'spec17_name',
            // 'spec18_name',
            // 'spec19_name',
            // 'spec20_name',
            // 'spec21_name',
            // 'spec22_name',
            // 'spec23_name',
            // 'spec24_name',
            // 'spec25_name',
            // 'spec1_id',
            // 'spec2_id',
            // 'spec3_id',
            // 'spec4_id',
            // 'spec5_id',
            // 'spec6_id',
            // 'spec7_id',
            // 'spec8_id',
            // 'spec9_id',
            // 'spec10_id',
            // 'spec11_id',
            // 'spec12_id',
            // 'spec13_id',
            // 'spec14_id',
            // 'spec15_id',
            // 'spec16_id',
            // 'spec17_id',
            // 'spec18_id',
            // 'spec19_id',
            // 'spec20_id',
            // 'spec21_id',
            // 'spec22_id',
            // 'spec23_id',
            // 'spec24_id',
            // 'spec25_id',
            // 'photo_1',
            // 'photo_2',
            // 'photo_3',
            // 'photo_4',
            // 'photo_5',
            // 'photo_6',
            // 'photo_8',
            // 'photo_9',
            // 'photo_10',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
