<?php

namespace app\models;
use yii\db\ActiveRecord;
class Product extends  ActiveRecord{
	public function addToViewed($product,$qty = 1){
    	if(!isset($_SESSION['viewed'][$product->id])){
			$_SESSION['viewed'][$product->id] = [
				'name' => $product->name,
				'price' => $product->price,
				'img' => $product->photo_1,
			];
		}
    }
    
    public static function tableName(){
        return 'products';
    }

    public function getCategory(){
        return $this->hasOne(Category::className(),['id' => 'category_id']);
    }
}