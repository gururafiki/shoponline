<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\adminpanel\models\ProductsSearch */
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

    <?php // echo $form->field($model, 'spec10_name') ?>

    <?php // echo $form->field($model, 'spec11_name') ?>

    <?php // echo $form->field($model, 'spec12_name') ?>

    <?php // echo $form->field($model, 'spec13_name') ?>

    <?php // echo $form->field($model, 'spec14_name') ?>

    <?php // echo $form->field($model, 'spec15_name') ?>

    <?php // echo $form->field($model, 'spec16_name') ?>

    <?php // echo $form->field($model, 'spec17_name') ?>

    <?php // echo $form->field($model, 'spec18_name') ?>

    <?php // echo $form->field($model, 'spec19_name') ?>

    <?php // echo $form->field($model, 'spec20_name') ?>

    <?php // echo $form->field($model, 'spec21_name') ?>

    <?php // echo $form->field($model, 'spec22_name') ?>

    <?php // echo $form->field($model, 'spec23_name') ?>

    <?php // echo $form->field($model, 'spec24_name') ?>

    <?php // echo $form->field($model, 'spec25_name') ?>

    <?php // echo $form->field($model, 'spec1_id') ?>

    <?php // echo $form->field($model, 'spec2_id') ?>

    <?php // echo $form->field($model, 'spec3_id') ?>

    <?php // echo $form->field($model, 'spec4_id') ?>

    <?php // echo $form->field($model, 'spec5_id') ?>

    <?php // echo $form->field($model, 'spec6_id') ?>

    <?php // echo $form->field($model, 'spec7_id') ?>

    <?php // echo $form->field($model, 'spec8_id') ?>

    <?php // echo $form->field($model, 'spec9_id') ?>

    <?php // echo $form->field($model, 'spec10_id') ?>

    <?php // echo $form->field($model, 'spec11_id') ?>

    <?php // echo $form->field($model, 'spec12_id') ?>

    <?php // echo $form->field($model, 'spec13_id') ?>

    <?php // echo $form->field($model, 'spec14_id') ?>

    <?php // echo $form->field($model, 'spec15_id') ?>

    <?php // echo $form->field($model, 'spec16_id') ?>

    <?php // echo $form->field($model, 'spec17_id') ?>

    <?php // echo $form->field($model, 'spec18_id') ?>

    <?php // echo $form->field($model, 'spec19_id') ?>

    <?php // echo $form->field($model, 'spec20_id') ?>

    <?php // echo $form->field($model, 'spec21_id') ?>

    <?php // echo $form->field($model, 'spec22_id') ?>

    <?php // echo $form->field($model, 'spec23_id') ?>

    <?php // echo $form->field($model, 'spec24_id') ?>

    <?php // echo $form->field($model, 'spec25_id') ?>

    <?php // echo $form->field($model, 'keywords') ?>

    <?php // echo $form->field($model, 'describtion') ?>

    <?php // echo $form->field($model, 'photo_1') ?>

    <?php // echo $form->field($model, 'photo_2') ?>

    <?php // echo $form->field($model, 'photo_3') ?>

    <?php // echo $form->field($model, 'photo_4') ?>

    <?php // echo $form->field($model, 'photo_5') ?>

    <?php // echo $form->field($model, 'photo_6') ?>

    <?php // echo $form->field($model, 'photo_8') ?>

    <?php // echo $form->field($model, 'photo_9') ?>

    <?php // echo $form->field($model, 'photo_10') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'popularity') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
