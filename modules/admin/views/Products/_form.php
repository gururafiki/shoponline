<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'type')->textInput() ?>

    <?= $form->field($model, 'sub_type')->textInput() ?>

    <?= $form->field($model, 'category_id')->dropDownList($arrCategories,['prompt' => '']) ?>

    <?= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'spec1_name')->dropDownList($arrSpecs,[
            'prompt' => '',
            'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec1_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec1_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec2_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec2_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec2_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec3_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec3_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec3_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec4_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec4_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec4_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec5_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec5_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec5_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec6_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec6_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec6_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec7_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec7_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec7_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec8_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec8_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec8_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'spec9_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec9_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec9_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describtion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'popularity')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
