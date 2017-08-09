<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\adminpanel\models\Products */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'category_id',
            'category_name',
            'type',
            'sub_type',
            'name',
            'spec1_name','spec1_id',
            'spec2_name','spec2_id',
            'spec3_name','spec3_id',
            'spec4_name','spec4_id',
            'spec5_name','spec5_id',
            'spec6_name','spec6_id',
            'spec7_name','spec7_id',
            'spec8_name','spec8_id',
            'spec9_name','spec9_id',
            'spec10_name','spec10_id',
            'spec11_name','spec11_id',
            'spec12_name','spec12_id',
            'spec13_name','spec13_id',
            'spec14_name','spec14_id',
            'spec15_name','spec15_id',
            'spec16_name','spec16_id',
            'spec17_name','spec17_id',
            'spec18_name','spec18_id',
            'spec19_name','spec19_id',
            'spec20_name','spec20_id',
            'spec21_name','spec21_id',
            'spec22_name','spec22_id',
            'spec23_name','spec23_id',
            'spec24_name','spec24_id',
            'spec25_name','spec25_id',
            'keywords',
            'describtion:ntext',
            [
                'attribute'=>'photo_1',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_1,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_2',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_2,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_3',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_3,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_4',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_4,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_5',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_5,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_6',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_6,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_8',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_8,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_9',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_9,
                'format'=>['image'],
            ],

            [
                'attribute'=>'photo_10',
                'value'=>Yii::getAlias('@productImgUrl').'/'.$model->photo_10,
                'format'=>['image'],
            ],
            'price',
            'popularity',
        ],
    ]) ?>

</div>
