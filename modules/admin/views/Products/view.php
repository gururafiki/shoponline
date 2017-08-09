<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Products */

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
            'spec1_name',
            'spec2_name',
            'spec3_name',
            'spec4_name',
            'spec5_name',
            'spec6_name',
            'spec7_name',
            'spec8_name',
            'spec9_name',
            'spec1_id',
            'spec2_id',
            'spec3_id',
            'spec4_id',
            'spec5_id',
            'spec6_id',
            'spec7_id',
            'spec8_id',
            'spec9_id',
            'keywords',
            'describtion',
            'photo',
            'price',
            'popularity',
        ],
    ]) ?>

</div>
