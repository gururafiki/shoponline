<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\ProductsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'category_id') ?>

    <?= $form->field($model, 'category_name') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'sub_type') ?>

    <?php // echo $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'spec1_name') ?>

    <?php // echo $form->field($model, 'spec2_name') ?>

    <?php // echo $form->field($model, 'spec3_name') ?>

    <?php // echo $form->field($model, 'spec4_name') ?>

    <?php // echo $form->field($model, 'spec5_name') ?>

    <?php // echo $form->field($model, 'spec6_name') ?>

    <?php // echo $form->field($model, 'spec7_name') ?>

    <?php // echo $form->field($model, 'spec8_name') ?>

    <?php // echo $form->field($model, 'spec9_name') ?>

    <?php // echo $form->field($model, 'spec1_id') ?>

    <?php // echo $form->field($model, 'spec2_id') ?>

    <?php // echo $form->field($model, 'spec3_id') ?>

    <?php // echo $form->field($model, 'spec4_id') ?>

    <?php // echo $form->field($model, 'spec5_id') ?>

    <?php // echo $form->field($model, 'spec6_id') ?>

    <?php // echo $form->field($model, 'spec7_id') ?>

    <?php // echo $form->field($model, 'spec8_id') ?>

    <?php // echo $form->field($model, 'spec9_id') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'describtion') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'popularity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
