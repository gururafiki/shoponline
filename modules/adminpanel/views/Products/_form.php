<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\adminpanel\models\Categories;
/* @var $this yii\web\View */
/* @var $model app\modules\adminpanel\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList($arrCategories,['prompt' => '']) ?>

<!--    --><?//= $form->field($model, 'category_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sub_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $model->spec1_name.' : '.Categories::findOne(['id'=>$model->spec1_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec1_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec1_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec1_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec2_name.' : '.Categories::findOne(['id'=>$model->spec2_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec2_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec2_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec2_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec3_name.' : '.Categories::findOne(['id'=>$model->spec3_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec3_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec3_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec3_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec4_name.' : '.Categories::findOne(['id'=>$model->spec4_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec4_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec4_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec4_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec5_name.' : '.Categories::findOne(['id'=>$model->spec5_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec5_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec5_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec5_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec6_name.' : '.Categories::findOne(['id'=>$model->spec6_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec6_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec6_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec6_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec7_name.' : '.Categories::findOne(['id'=>$model->spec7_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec7_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec7_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec7_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec8_name.' : '.Categories::findOne(['id'=>$model->spec8_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec8_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec8_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec8_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec9_name.' : '.Categories::findOne(['id'=>$model->spec9_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec9_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec9_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec9_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec10_name.' : '.Categories::findOne(['id'=>$model->spec10_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec10_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec10_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec10_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec11_name.' : '.Categories::findOne(['id'=>$model->spec11_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec11_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec11_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec11_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec12_name.' : '.Categories::findOne(['id'=>$model->spec12_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec12_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec12_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec12_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec13_name.' : '.Categories::findOne(['id'=>$model->spec13_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec13_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec13_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec13_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec14_name.' : '.Categories::findOne(['id'=>$model->spec14_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec14_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec14_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec14_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec15_name.' : '.Categories::findOne(['id'=>$model->spec15_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec15_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec15_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec15_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec16_name.' : '.Categories::findOne(['id'=>$model->spec16_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec16_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec16_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec16_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec17_name.' : '.Categories::findOne(['id'=>$model->spec17_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec17_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec17_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec17_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec18_name.' : '.Categories::findOne(['id'=>$model->spec18_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec18_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec18_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec18_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec19_name.' : '.Categories::findOne(['id'=>$model->spec19_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec19_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec19_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec19_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec20_name.' : '.Categories::findOne(['id'=>$model->spec20_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec20_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec20_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec20_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec21_name.' : '.Categories::findOne(['id'=>$model->spec21_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec21_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec21_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec21_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec22_name.' : '.Categories::findOne(['id'=>$model->spec22_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec22_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec22_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec22_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec23_name.' : '.Categories::findOne(['id'=>$model->spec23_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec23_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec23_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec23_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec24_name.' : '.Categories::findOne(['id'=>$model->spec24_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec24_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec24_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec24_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?php echo $model->spec25_name.' : '.Categories::findOne(['id'=>$model->spec25_id])->name.'<br>'; ?>
    <?= $form->field($model, 'spec25_name')->dropDownList($arrSpecs,[
        'prompt' => '',
        'onchange' => '
                $.post("/products/lists/'.'"+$(this).val(), function(data){
                    $("select#products-spec25_id").html(data);
                });',
    ]) ?>

    <?= $form->field($model, 'spec25_id')->dropDownList($arrSpecsId,['prompt' => '']) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'describtion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo_1')->fileInput() ?>

    <?= $form->field($model, 'photo_2')->fileInput() ?>

    <?= $form->field($model, 'photo_3')->fileInput() ?>

    <?= $form->field($model, 'photo_4')->fileInput() ?>

    <?= $form->field($model, 'photo_5')->fileInput() ?>

    <?= $form->field($model, 'photo_6')->fileInput() ?>

    <?= $form->field($model, 'photo_8')->fileInput() ?>

    <?= $form->field($model, 'photo_9')->fileInput() ?>

    <?= $form->field($model, 'photo_10')->fileInput() ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'popularity')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
