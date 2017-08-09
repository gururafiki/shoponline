<div class="row">
    <div class="col-md-6">
        <?= \yii\helpers\Html::img("@web/images/products/{$product->photo_1}",['alt' => $product->name, 'width' => '100%']) ?>
    </div>
    <div class="col-md-6">
        <h4 style="text-shadow: 0 1px 3px rgba(0,0,0,0.5);color: #009adb;"><?=$product->name ?></h3>
        <h5>Описание :<?= $product->describtion ?></h5>
        <h5>Тип :<?=$product->category_name?></h5>
<!--        <h5>Под тип:--><?//=$product->sub_type?><!--</h5>-->
        <h5>Скачать спецификацию:<?=$product->sub_type?></h5>
        <h5>Цена за штуку:<?=$product->price?></h5>
    </div>
    <?php if(!empty($arrSpecs)):?>
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover table-striped">
                <thead>
                    <th>Спецификация</th>
                    <th>Значение</th>
                </thead>
                <tbody>
                <?php foreach($arrSpecs as $spec=>$value):?>
                    <tr>
                        <td><?=$arrSpecs[$spec]['name']?></td>
                        <td><?=$arrSpecs[$spec]['id']?></td>
                    </tr>
                <?php endforeach;?>
<!--                    <tr>-->
<!--                        <td>Тип</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Под тип</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Тип кристала</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Производитель кристала</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Мощность</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Напряжение</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Производитель</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Цвет свечения</td>-->
<!--                        <td>--><?//=$product->sub_type?><!--</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Температура цвета</td>-->
<!--                        <td>--><?//=$product->sub_type?><!-- тыс. Кельвинов</td>-->
<!--                    </tr>-->
<!--                    <tr>-->
<!--                        <td>Количество диодов</td>-->
<!--                        <td>--><?//=$product->sub_type?><!-- тыс. Кельвинов</td>-->
<!--                    </tr>-->
                </tbody>
            </table>
        </div>  
    </div>
    <?php endif;?>
</div>