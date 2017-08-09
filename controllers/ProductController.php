<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;

class ProductController extends AppController {

	public function actionView($id){
		$id = Yii::$app->request->get('id');
		$product = Product::findOne($id);
		if(empty($product)) return false;
		$session= Yii::$app->session;
		$session->open();
		$viewed = new Product();
		$viewed->addToViewed($product);
		$this->layout=false;
        if(strlen($product->spec1_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec1_name,
                'id'=>Category::findOne(['id'=>$product->spec1_id])->name,
            ];
        }
        if(strlen($product->spec2_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec2_name,
                'id'=>Category::findOne(['id'=>$product->spec2_id])->name,
            ];
        }
        if(strlen($product->spec3_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec3_name,
                'id'=>Category::findOne(['id'=>$product->spec3_id])->name,
            ];
        }
        if(strlen($product->spec4_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec4_name,
                'id'=>Category::findOne(['id'=>$product->spec4_id])->name,
            ];
        }
        if(strlen($product->spec5_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec5_name,
                'id'=>Category::findOne(['id'=>$product->spec5_id])->name,
            ];
        }
        if(strlen($product->spec6_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec6_name,
                'id'=>Category::findOne(['id'=>$product->spec6_id])->name,
            ];
        }
        if(strlen($product->spec7_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec7_name,
                'id'=>Category::findOne(['id'=>$product->spec7_id])->name,
            ];
        }
        if(strlen($product->spec8_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec8_name,
                'id'=>Category::findOne(['id'=>$product->spec8_id])->name,
            ];
        }
        if(strlen($product->spec9_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec9_name,
                'id'=>Category::findOne(['id'=>$product->spec9_id])->name,
            ];
        }
        if(strlen($product->spec10_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec10_name,
                'id'=>Category::findOne(['id'=>$product->spec10_id])->name,
            ];
        }
        if(strlen($product->spec11_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec11_name,
                'id'=>Category::findOne(['id'=>$product->spec11_id])->name,
            ];
        }
        if(strlen($product->spec12_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec12_name,
                'id'=>Category::findOne(['id'=>$product->spec12_id])->name,
            ];
        }
        if(strlen($product->spec13_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec13_name,
                'id'=>Category::findOne(['id'=>$product->spec13_id])->name,
            ];
        }
        if(strlen($product->spec14_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec14_name,
                'id'=>Category::findOne(['id'=>$product->spec14_id])->name,
            ];
        }
        if(strlen($product->spec15_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec15_name,
                'id'=>Category::findOne(['id'=>$product->spec15_id])->name,
            ];
        }
        if(strlen($product->spec16_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec16_name,
                'id'=>Category::findOne(['id'=>$product->spec16_id])->name,
            ];
        }
        if(strlen($product->spec17_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec17_name,
                'id'=>Category::findOne(['id'=>$product->spec17_id])->name,
            ];
        }
        if(strlen($product->spec18_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec18_name,
                'id'=>Category::findOne(['id'=>$product->spec18_id])->name,
            ];
        }
        if(strlen($product->spec19_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec19_name,
                'id'=>Category::findOne(['id'=>$product->spec19_id])->name,
            ];
        }
        if(strlen($product->spec20_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec20_name,
                'id'=>Category::findOne(['id'=>$product->spec20_id])->name,
            ];
        }
        if(strlen($product->spec21_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec21_name,
                'id'=>Category::findOne(['id'=>$product->spec21_id])->name,
            ];
        }
        if(strlen($product->spec22_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec22_name,
                'id'=>Category::findOne(['id'=>$product->spec22_id])->name,
            ];
        }
        if(strlen($product->spec23_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec23_name,
                'id'=>Category::findOne(['id'=>$product->spec23_id])->name,
            ];
        }
        if(strlen($product->spec24_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec24_name,
                'id'=>Category::findOne(['id'=>$product->spec24_id])->name,
            ];
        }
        if(strlen($product->spec25_name)>=2){
            $arrSpecs[]=[
                'name'=>$product->spec25_name,
                'id'=>Category::findOne(['id'=>$product->spec25_id])->name,
            ];
        }

        return $this->render('view',compact('product','session','arrSpecs'));
	}
}