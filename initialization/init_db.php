<?php

    require "db.php";
    function add_product($name,$type,$sub_type,$category_id,$describtion,$keywords,$specs,$photo,$price,$popularity){
	    $product=R::dispense('products');
	    $product->category_id=$category_id;
	    $product->type=$type;
	    $product->sub_type=$sub_type;
	    $product->name=$name;
	    $product->specs=$specs;
	    $product->keywords=$keywords;
	    $product->describtion=$describtion;
    	$product->photo=$photo;
        $product->price=$price;
        $product->popularity=$popularity;
	    R::store($product);
	}
	function add_category($name,$parent_id,$describtion,$keywords){
	    $category=R::dispense('categories');
	    $category->parent_id=$parent_id;
	    $category->name=$name;
	    $category->keywords=$keywords;
	    $category->describtion=$describtion;
	    R::store($category);
	}

    function create_category($name,$parent_name,$describtion,$keywords,$needed_specs){
        $category=R::dispense('categories');
        if(strlen($parent_name)>1) {
            $parent_of_parent=R::findOne('categories','name = ?',array($parent_name));
            $category->parent_id = $parent_of_parent->id;
            if ($parent_of_parent->parent_id != 0)
                $category->parent_of_parent_id =$parent_of_parent->parent_id;
            else
                $category->parent_of_parent_id =0;
            $category->parent_name = $parent_name;
        }
        else{
            $category->parent_of_parent_id =0;
            $category->parent_id = 0;
            $category->parent_name = 0;
        }
        $category->name=$name;
        $category->specs = $needed_specs;
        $category->keywords=$keywords;
        $category->describtion=$describtion;
        R::store($category);
    }

// create_product('Обратный звонок',$type,$sub_type,'Светодиоды',$describtion,$keywords,$photo,$price,$popularity, 'Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V','Напряжение','12V');
   
    function create_product($name,$type,$sub_type,$category_name,$describtion,$keywords,$photo,$price,$popularity, $spec1_name = 0, $spec1_value = 0, $spec2_name = 0, $spec2_value = 0, $spec3_name = 0, $spec3_value = 0, $spec4_name = 0, $spec4_value = 0, $spec5_name = 0, $spec5_value = 0, $spec6_name = 0, $spec6_value = 0, $spec7_name = 0, $spec7_value = 0, $spec8_name = 0, $spec8_value = 0, $spec9_name = 0, $spec9_value = 0,$spec10_name = 0, $spec10_value = 0,$spec11_name = 0, $spec11_value = 0,$spec12_name = 0, $spec12_value = 0,$spec13_name = 0, $spec13_value = 0,$spec14_name = 0, $spec14_value = 0,$spec15_name = 0, $spec15_value = 0,$spec16_name = 0, $spec16_value = 0,$spec17_name = 0, $spec17_value = 0,$spec18_name = 0, $spec18_value = 0,$spec19_name = 0, $spec19_value = 0,$spec20_name = 0, $spec20_value = 0,$spec21_name = 0, $spec21_value = 0,$spec22_name = 0, $spec22_value = 0,$spec23_name = 0, $spec23_value = 0,$spec24_name = 0, $spec24_value = 0,$spec25_name = 0, $spec25_value = 0)
    {
        $product = R::dispense('products');
        $category=R::findOne('categories','name = ?',array($category_name));
        $product->category_id = $category->id;
        $product->category_name = $category_name;
        $product->type = $type;
        $product->sub_type = $sub_type;
        $product->name = $name;
        if(strlen($spec1_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec1_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec1_name;
                }
            }
            else
                $category->specs=$spec1_name;
            $product->spec1_name = $spec1_name;
        }
        if(strlen($spec2_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec2_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec2_name;
                }
            }
            else
                $category->specs=$spec2_name;
            $product->spec2_name = $spec2_name;
        }
        if(strlen($spec3_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec3_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec3_name;
                }
            }
            else
                $category->specs=$spec3_name;
            $product->spec3_name = $spec3_name;
        }
        if(strlen($spec4_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec4_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec4_name;
                }
            }
            else
                $category->specs=$spec4_name;
            $product->spec4_name = $spec4_name;
        }
        if(strlen($spec5_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec5_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec5_name;
                }
            }
            else
                $category->specs=$spec5_name;
            $product->spec5_name = $spec5_name;
        }
        if(strlen($spec6_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec6_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec6_name;
                }
            }
            else
                $category->specs=$spec6_name;
            $product->spec6_name = $spec6_name;
        }
        if(strlen($spec7_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec7_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec7_name;
                }
            }
            else
                $category->specs=$spec7_name;
            $product->spec7_name = $spec7_name;
        }
        if(strlen($spec8_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec8_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec8_name;
                }
            }
            else
                $category->specs=$spec8_name;
            $product->spec8_name = $spec8_name;
        }
        if(strlen($spec9_name)>=2 ) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec9_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec9_name;
                }
            }
            else
                $category->specs=$spec9_name;
            $product->spec9_name = $spec9_name;
        }
        if(strlen($spec10_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec10_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec10_name;
                }
            }
            else
                $category->specs=$spec10_name;
            $product->spec10_name = $spec10_name;
        }
        if(strlen($spec11_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec11_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec11_name;
                }
            }
            else
                $category->specs=$spec11_name;
            $product->spec11_name = $spec11_name;
        }
        if(strlen($spec12_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec12_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec12_name;
                }
            }
            else
                $category->specs=$spec12_name;
            $product->spec12_name = $spec12_name;
        }
        if(strlen($spec13_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec13_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec13_name;
                }
            }
            else
                $category->specs=$spec13_name;
            $product->spec13_name = $spec13_name;
        }
        if(strlen($spec14_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec14_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec14_name;
                }
            }
            else
                $category->specs=$spec14_name;
            $product->spec14_name = $spec14_name;
        }
        if(strlen($spec15_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec15_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec15_name;
                }
            }
            else
                $category->specs=$spec15_name;
            $product->spec15_name = $spec15_name;
        }
        if(strlen($spec16_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec16_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec16_name;
                }
            }
            else
                $category->specs=$spec16_name;
            $product->spec16_name = $spec16_name;
        }
        if(strlen($spec17_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec17_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec17_name;
                }
            }
            else
                $category->specs=$spec17_name;
            $product->spec17_name = $spec17_name;
        }
        if(strlen($spec18_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec18_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec18_name;
                }
            }
            else
                $category->specs=$spec18_name;
            $product->spec18_name = $spec18_name;
        }
        if(strlen($spec19_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec19_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec19_name;
                }
            }
            else
                $category->specs=$spec19_name;
            $product->spec19_name = $spec19_name;
        }
        if(strlen($spec20_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec20_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec20_name;
                }
            }
            else
                $category->specs=$spec20_name;
            $product->spec20_name = $spec20_name;
        }
        if(strlen($spec21_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec21_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec21_name;
                }
            }
            else
                $category->specs=$spec21_name;
            $product->spec21_name = $spec21_name;
        }
        if(strlen($spec22_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec22_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec22_name;
                }
            }
            else
                $category->specs=$spec22_name;
            $product->spec22_name = $spec22_name;
        }
        if(strlen($spec23_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec23_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec23_name;
                }
            }
            else
                $category->specs=$spec23_name;
            $product->spec23_name = $spec23_name;
        }
        if(strlen($spec24_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec24_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec24_name;
                }
            }
            else
                $category->specs=$spec24_name;
            $product->spec24_name = $spec24_name;
        }
        if(strlen($spec25_name)>=2) {
            if(strlen($category->specs)>2){
                $arrSpecs=explode(',',$category->specs);
                $flag=true;
                foreach($arrSpecs as $spec){
                    if($spec==$spec25_name){
                        $flag=false;
                        break;
                    }
                }
                if($flag==true){
                    $category->specs=$category->specs.','.$spec25_name;
                }
            }
            else
                $category->specs=$spec25_name;
            $product->spec25_name = $spec25_name;
        }
        R::store($category);
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec1_value,$spec1_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec2_value,$spec2_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec3_value,$spec3_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec4_value,$spec4_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec5_value,$spec5_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec6_value,$spec6_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec7_value,$spec7_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec8_value,$spec8_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec9_value,$spec9_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec10_value,$spec10_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec11_value,$spec11_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec12_value,$spec12_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec13_value,$spec13_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec14_value,$spec14_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec15_value,$spec15_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec16_value,$spec16_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec17_value,$spec17_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec18_value,$spec18_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec19_value,$spec19_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec20_value,$spec20_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec21_value,$spec21_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec22_value,$spec22_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec23_value,$spec23_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec24_value,$spec24_name))->id;
//        R::findOne('categories', 'name = ? AND parent_name = ?', array($spec25_value,$spec25_name))->id;

        if(strlen($spec1_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec1_name ))->id))   create_category($spec1_name ,'0','фильтрация товаров по '.$spec1_name ,$spec1_name .',Electrovolt',0);
        if(strlen($spec2_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec2_name ))->id))   create_category($spec2_name ,'0','фильтрация товаров по '.$spec2_name ,$spec2_name .',Electrovolt',0);
        if(strlen($spec3_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec3_name ))->id))   create_category($spec3_name ,'0','фильтрация товаров по '.$spec3_name ,$spec3_name .',Electrovolt',0);
        if(strlen($spec4_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec4_name ))->id))   create_category($spec4_name ,'0','фильтрация товаров по '.$spec4_name ,$spec4_name .',Electrovolt',0);
        if(strlen($spec5_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec5_name ))->id))   create_category($spec5_name ,'0','фильтрация товаров по '.$spec5_name ,$spec5_name .',Electrovolt',0);
        if(strlen($spec6_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec6_name ))->id))   create_category($spec6_name ,'0','фильтрация товаров по '.$spec6_name ,$spec6_name .',Electrovolt',0);
        if(strlen($spec7_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec7_name ))->id))   create_category($spec7_name ,'0','фильтрация товаров по '.$spec7_name ,$spec7_name .',Electrovolt',0);
        if(strlen($spec8_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec8_name ))->id))   create_category($spec8_name ,'0','фильтрация товаров по '.$spec8_name ,$spec8_name .',Electrovolt',0);
        if(strlen($spec9_name)>=2  && !isset(R::findOne('categories', 'name = ?', array($spec9_name ))->id))   create_category($spec9_name ,'0','фильтрация товаров по '.$spec9_name ,$spec9_name .',Electrovolt',0);
        if(strlen($spec10_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec10_name))->id))   create_category($spec10_name,'0','фильтрация товаров по '.$spec10_name,$spec10_name.',Electrovolt',0);
        if(strlen($spec11_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec11_name))->id))   create_category($spec11_name,'0','фильтрация товаров по '.$spec11_name,$spec11_name.',Electrovolt',0);
        if(strlen($spec12_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec12_name))->id))   create_category($spec12_name,'0','фильтрация товаров по '.$spec12_name,$spec12_name.',Electrovolt',0);
        if(strlen($spec13_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec13_name))->id))   create_category($spec13_name,'0','фильтрация товаров по '.$spec13_name,$spec13_name.',Electrovolt',0);
        if(strlen($spec14_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec14_name))->id))   create_category($spec14_name,'0','фильтрация товаров по '.$spec14_name,$spec14_name.',Electrovolt',0);
        if(strlen($spec15_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec15_name))->id))   create_category($spec15_name,'0','фильтрация товаров по '.$spec15_name,$spec15_name.',Electrovolt',0);
        if(strlen($spec16_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec16_name))->id))   create_category($spec16_name,'0','фильтрация товаров по '.$spec16_name,$spec16_name.',Electrovolt',0);
        if(strlen($spec17_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec17_name))->id))   create_category($spec17_name,'0','фильтрация товаров по '.$spec17_name,$spec17_name.',Electrovolt',0);
        if(strlen($spec18_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec18_name))->id))   create_category($spec18_name,'0','фильтрация товаров по '.$spec18_name,$spec18_name.',Electrovolt',0);
        if(strlen($spec19_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec19_name))->id))   create_category($spec19_name,'0','фильтрация товаров по '.$spec19_name,$spec19_name.',Electrovolt',0);
        if(strlen($spec20_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec20_name))->id))   create_category($spec20_name,'0','фильтрация товаров по '.$spec20_name,$spec20_name.',Electrovolt',0);
        if(strlen($spec21_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec21_name))->id))   create_category($spec21_name,'0','фильтрация товаров по '.$spec21_name,$spec21_name.',Electrovolt',0);
        if(strlen($spec22_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec22_name))->id))   create_category($spec22_name,'0','фильтрация товаров по '.$spec22_name,$spec22_name.',Electrovolt',0);
        if(strlen($spec23_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec23_name))->id))   create_category($spec23_name,'0','фильтрация товаров по '.$spec23_name,$spec23_name.',Electrovolt',0);
        if(strlen($spec24_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec24_name))->id))   create_category($spec24_name,'0','фильтрация товаров по '.$spec24_name,$spec24_name.',Electrovolt',0);
        if(strlen($spec25_name)>=2 && !isset(R::findOne('categories', 'name = ?', array($spec25_name))->id))   create_category($spec25_name,'0','фильтрация товаров по '.$spec25_name,$spec25_name.',Electrovolt',0);

        if(strlen($spec1_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec1_value , $spec1_name))->id))   create_category($spec1_value , $spec1_name,'фильтрация товаров по '.$spec1_name ,$spec1_value .','.$spec1_name .',Electrovolt',0);
        if(strlen($spec2_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec2_value , $spec2_name))->id))   create_category($spec2_value , $spec2_name,'фильтрация товаров по '.$spec2_name ,$spec2_value .','.$spec2_name .',Electrovolt',0);
        if(strlen($spec3_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec3_value , $spec3_name))->id))   create_category($spec3_value , $spec3_name,'фильтрация товаров по '.$spec3_name ,$spec3_value .','.$spec3_name .',Electrovolt',0);
        if(strlen($spec4_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec4_value , $spec4_name))->id))   create_category($spec4_value , $spec4_name,'фильтрация товаров по '.$spec4_name ,$spec4_value .','.$spec4_name .',Electrovolt',0);
        if(strlen($spec5_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec5_value , $spec5_name))->id))   create_category($spec5_value , $spec5_name,'фильтрация товаров по '.$spec5_name ,$spec5_value .','.$spec5_name .',Electrovolt',0);
        if(strlen($spec6_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec6_value , $spec6_name))->id))   create_category($spec6_value , $spec6_name,'фильтрация товаров по '.$spec6_name ,$spec6_value .','.$spec6_name .',Electrovolt',0);
        if(strlen($spec7_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec7_value , $spec7_name))->id))   create_category($spec7_value , $spec7_name,'фильтрация товаров по '.$spec7_name ,$spec7_value .','.$spec7_name .',Electrovolt',0);
        if(strlen($spec8_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec8_value , $spec8_name))->id))   create_category($spec8_value , $spec8_name,'фильтрация товаров по '.$spec8_name ,$spec8_value .','.$spec8_name .',Electrovolt',0);
        if(strlen($spec9_name)>=2  &&  !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec9_value , $spec9_name))->id))   create_category($spec9_value , $spec9_name,'фильтрация товаров по '.$spec9_name ,$spec9_value .','.$spec9_name .',Electrovolt',0);
        if(strlen($spec10_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec10_value,$spec10_name))->id))   create_category($spec10_value,$spec10_name,'фильтрация товаров по '.$spec10_name,$spec10_value.','.$spec10_name.',Electrovolt',0);
        if(strlen($spec11_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec11_value,$spec11_name))->id))   create_category($spec11_value,$spec11_name,'фильтрация товаров по '.$spec11_name,$spec11_value.','.$spec11_name.',Electrovolt',0);
        if(strlen($spec12_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec12_value,$spec12_name))->id))   create_category($spec12_value,$spec12_name,'фильтрация товаров по '.$spec12_name,$spec12_value.','.$spec12_name.',Electrovolt',0);
        if(strlen($spec13_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec13_value,$spec13_name))->id))   create_category($spec13_value,$spec13_name,'фильтрация товаров по '.$spec13_name,$spec13_value.','.$spec13_name.',Electrovolt',0);
        if(strlen($spec14_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec14_value,$spec14_name))->id))   create_category($spec14_value,$spec14_name,'фильтрация товаров по '.$spec14_name,$spec14_value.','.$spec14_name.',Electrovolt',0);
        if(strlen($spec15_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec15_value,$spec15_name))->id))   create_category($spec15_value,$spec15_name,'фильтрация товаров по '.$spec15_name,$spec15_value.','.$spec15_name.',Electrovolt',0);
        if(strlen($spec16_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec16_value,$spec16_name))->id))   create_category($spec16_value,$spec16_name,'фильтрация товаров по '.$spec16_name,$spec16_value.','.$spec16_name.',Electrovolt',0);
        if(strlen($spec17_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec17_value,$spec17_name))->id))   create_category($spec17_value,$spec17_name,'фильтрация товаров по '.$spec17_name,$spec17_value.','.$spec17_name.',Electrovolt',0);
        if(strlen($spec18_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec18_value,$spec18_name))->id))   create_category($spec18_value,$spec18_name,'фильтрация товаров по '.$spec18_name,$spec18_value.','.$spec18_name.',Electrovolt',0);
        if(strlen($spec19_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec19_value,$spec19_name))->id))   create_category($spec19_value,$spec19_name,'фильтрация товаров по '.$spec19_name,$spec19_value.','.$spec19_name.',Electrovolt',0);
        if(strlen($spec20_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec20_value,$spec20_name))->id))   create_category($spec20_value,$spec20_name,'фильтрация товаров по '.$spec20_name,$spec20_value.','.$spec20_name.',Electrovolt',0);
        if(strlen($spec21_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec21_value,$spec21_name))->id))   create_category($spec21_value,$spec21_name,'фильтрация товаров по '.$spec21_name,$spec21_value.','.$spec21_name.',Electrovolt',0);
        if(strlen($spec22_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec22_value,$spec22_name))->id))   create_category($spec22_value,$spec22_name,'фильтрация товаров по '.$spec22_name,$spec22_value.','.$spec22_name.',Electrovolt',0);
        if(strlen($spec23_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec23_value,$spec23_name))->id))   create_category($spec23_value,$spec23_name,'фильтрация товаров по '.$spec23_name,$spec23_value.','.$spec23_name.',Electrovolt',0);
        if(strlen($spec24_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec24_value,$spec24_name))->id))   create_category($spec24_value,$spec24_name,'фильтрация товаров по '.$spec24_name,$spec24_value.','.$spec24_name.',Electrovolt',0);
        if(strlen($spec25_name)>=2  && !isset(R::findOne('categories', 'name = ? AND parent_name = ?', array($spec25_value,$spec25_name))->id))   create_category($spec25_value,$spec25_name,'фильтрация товаров по '.$spec25_name,$spec25_value.','.$spec25_name.',Electrovolt',0);

        if(strlen($spec1_name)>=2 ) $product->spec1_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec1_value,$spec1_name))->id;
        if(strlen($spec2_name)>=2 ) $product->spec2_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec2_value,$spec2_name))->id;
        if(strlen($spec3_name)>=2 ) $product->spec3_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec3_value,$spec3_name))->id;
        if(strlen($spec4_name)>=2 ) $product->spec4_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec4_value,$spec4_name))->id;
        if(strlen($spec5_name)>=2 ) $product->spec5_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec5_value,$spec5_name))->id;
        if(strlen($spec6_name)>=2 ) $product->spec6_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec6_value,$spec6_name))->id;
        if(strlen($spec7_name)>=2 ) $product->spec7_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec7_value,$spec7_name))->id;
        if(strlen($spec8_name)>=2 ) $product->spec8_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec8_value,$spec8_name))->id;
        if(strlen($spec9_name)>=2 ) $product->spec9_id  = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec9_value,$spec9_name))->id;
        if(strlen($spec10_name)>=2) $product->spec10_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec10_value,$spec10_name))->id;
        if(strlen($spec11_name)>=2) $product->spec11_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec11_value,$spec11_name))->id;
        if(strlen($spec12_name)>=2) $product->spec12_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec12_value,$spec12_name))->id;
        if(strlen($spec13_name)>=2) $product->spec13_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec13_value,$spec13_name))->id;
        if(strlen($spec14_name)>=2) $product->spec14_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec14_value,$spec14_name))->id;
        if(strlen($spec15_name)>=2) $product->spec15_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec15_value,$spec15_name))->id;
        if(strlen($spec16_name)>=2) $product->spec16_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec16_value,$spec16_name))->id;
        if(strlen($spec17_name)>=2) $product->spec17_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec17_value,$spec17_name))->id;
        if(strlen($spec18_name)>=2) $product->spec18_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec18_value,$spec18_name))->id;
        if(strlen($spec19_name)>=2) $product->spec19_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec19_value,$spec19_name))->id;
        if(strlen($spec20_name)>=2) $product->spec20_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec20_value,$spec20_name))->id;
        if(strlen($spec21_name)>=2) $product->spec21_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec21_value,$spec21_name))->id;
        if(strlen($spec22_name)>=2) $product->spec22_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec22_value,$spec22_name))->id;
        if(strlen($spec23_name)>=2) $product->spec23_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec23_value,$spec23_name))->id;
        if(strlen($spec24_name)>=2) $product->spec24_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec24_value,$spec24_name))->id;
        if(strlen($spec25_name)>=2) $product->spec25_id = R::findOne('categories', 'name = ? AND parent_name = ?', array($spec25_value,$spec25_name))->id;
        $product->keywords = $keywords;
        $product->describtion = $describtion;
        $product->photo_1 = strlen($photo[0])>1 ? save_photo($photo[0]) : '';
        $product->photo_2 = strlen($photo[1])>1 ? save_photo($photo[1]) : '';
        $product->photo_3 = strlen($photo[2])>1 ? save_photo($photo[2]) : '';
        $product->photo_4 = strlen($photo[3])>1 ? save_photo($photo[3]) : '';
        $product->photo_5 = strlen($photo[4])>1 ? save_photo($photo[4]) : '';
        $product->photo_6 = strlen($photo[5])>1 ? save_photo($photo[5]) : '';
        $product->photo_8 = strlen($photo[6])>1 ? save_photo($photo[6]) : '';
        $product->photo_9 = strlen($photo[7])>1 ? save_photo($photo[7]) : '';
        $product->photo_10 =strlen($photo[8])>1 ? save_photo($photo[8]) : '';
        $product->price = $price;
        $product->popularity = $popularity;
        R::store($product);
    }
    function save_photo($photo){
        $link = $photo;
        $uploaddir = '../web/images/products/';
        $uploadfile = $uploaddir.basename($link);
        if(!file_exists($uploadfile)) {
            if (copy($link, $uploadfile)) {
                return substr($uploadfile, strrpos($uploadfile, '/') + 1);
            }
        }
        else
            return substr($uploadfile, strrpos($uploadfile, '/') + 1);
    }
    //фильтрация по
        //производителю
        //по цвету свеченияХолодно-белый	9
//          Нейтрально-белый	10
//	        Белый	            32
//	        Тепло-белый	        20
//	        Красный	            5
//	        Зеленый	            5
//	        Синий	            6
//	        Желтый	            2
//	        RGB
        //по температуре цвета(Холод/Тепл/Нейтральный)(в тыс. Кельвинах)
        //Watts
//          4.8 Вт/метр	10
//	        6 Вт/метр	2
//	        7 Вт/метр	1
//	        7.2 Вт/метр	3
//	        9.6 Вт/метр	7
//	        12 Вт/метр	2
//	        14.4 Вт/метр	10
//	        19.2 Вт/метр	1
//	        24 Вт/метр
        //Volts
//          12V
//	        24V
//	        220V
        //Count diod
//          30 шт/метр	3
//      	60 шт/метр	22
//      	72 шт/метр	1
//      	120 шт/метр	11
//      	180 шт/метр	1
//      	240 шт/метр
//      type diod
//          SMD 2835	16
//      	SMD 3014	3
//      	SMD 335	    2
//      	SMD 3528	5
//      	SMD 5050	11
//      	SMD 5630	3
//      	SMD 5730
        //poducer chip
    function add_ledstorm(){
        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-W-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-WW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-NW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-CW-(3)-800x800.jpg'),83.84,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 2835', 'Цвет', 'Холодно-белый','Цвет', 'Нейтрально-белый','Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,4 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','8-10Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 60Д.М. NANO (IP67) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 60Д.М. NANO (IP67) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-WW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-CW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835120600-W-(2)-800x800.jpg'),110.04,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 2835', 'Цвет', 'Холодно-белый','Цвет', 'Тепло-белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,4 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP67','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W(-1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-NW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-WW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W(-3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W-(2)-800x800.jpg'),131.00,0, 'Количество светодиодов', '120 шт/метр', 'Тип светодиодов', 'SMD 2835', 'Цвет', 'Холодно-белый','Цвет', 'Нейтрально-белый','Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '9.6 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '2,5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','0,8 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','8-10Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. NANO (IP67) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. NANO (IP67) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W(-1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W(-3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-NW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-CW-(3)-800x800.jpg'),151.96,0, 'Количество светодиодов', '120 шт/метр', 'Тип светодиодов', 'SMD 2835', 'Цвет', 'Холодно-белый','Цвет', 'Нейтрально-белый','Цвет', 'Белый', 'Мощность', '9.6 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '2,5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','0,8 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP67','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM 22LM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 2835 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM 22LM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W(-1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-WW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom/VP-2835121200-1-W-(20)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W-(2)-800x800.jpg'),157.20,0, 'Количество светодиодов', '120 шт/метр', 'Тип светодиодов', 'SMD 2835', 'Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '24 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '2,5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,8 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','22Lm');


        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. ГЕРМЕТИЧНАЯ PREMIUM','Требует модерации','Рабочая температура,Рабочий ток','Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. ГЕРМЕТИЧНАЯ PREMIUM',array('https://ledstorm.ua/image/cache/catalog/products/324/324_369121121-800x800.jpg'),65.50,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 3528', 'Цвет', 'Синий','Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '3 месяца', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,4 А/метр','Размер','5000х8х2,5мм','Срок службы','30 000 часов','Степень защиты','IP65','Угол свечения','120°','Яркость на диод','5Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120600-CW-(22)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120600-CW-(23)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120600-CW-(24)-800x800.jpg'),83.84,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 3528','Цвет', 'Холодно-белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,4 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. NANO (IP67) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 60Д.М. NANO (IP67) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120601-CW-(5)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120601-NW-(30)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120601-CW-(31)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528120601-CW-(6)-800x800.jpg'),110.04,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 3528','Цвет', 'Нейтрально-белый','Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-25 до 60°C','Рабочий ток','0,4 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP67','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 120Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121200-NW-(20)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-W-(26)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-2835121200-CW-(27)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121200-NW-(21)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121200-NW-(25)-800x800.jpg'),131.00,0, 'Количество светодиодов', '120 шт/метр', 'Тип светодиодов', 'SMD 3528','Цвет', 'Нейтрально-белый','Цвет', 'Белый','Цвет', 'Холодно-белый', 'Мощность', '9.6 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','0,8 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 335 60Д.М. ГЕРМЕТИЧНАЯ (IP33) PREMIUM (БОКОВОЕ СВЕЧЕНИЕ)',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 335 60Д.М. ГЕРМЕТИЧНАЯ (IP33) PREMIUM (БОКОВОЕ СВЕЧЕНИЕ)',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VST-335120600-W-(1)-600x600.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VST-335120600-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VST-335120600-W-(3)-800x800.jpg'),133.62,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 335','Цвет', 'Белый', 'Мощность', '4.8 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','0,2 А/метр','Размер','5000х8х1,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','10Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3014 240Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3014 240Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom/VP-3014122400-W-(9)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom/%D0%9CVP-3014122400-W-(10)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom/VP-3014122400-W-(18)-800x800.jpg'),144.10,0, 'Количество светодиодов', '240 шт/метр', 'Тип светодиодов', 'SMD 3014','Цвет', 'Белый', 'Мощность', '24 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','1,6 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','10Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 120Д.М. NANO (IP67) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 3528 120Д.М. NANO (IP67) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121201-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121201-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121201-WW-(32)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121201-W-(33)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-3528121201-NW-(28)-800x800.jpg'),151.96,0, 'Количество светодиодов', '120 шт/метр', 'Тип светодиодов', 'SMD 3528','Цвет', 'Белый','Цвет', 'Тепло-белый','Цвет', 'Нейтрально-белый', 'Мощность', '9.6 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','0,8 А/метр','Размер','5000х8х2,5мм','Срок службы','50 000 часов','Степень защиты','IP67','Угол свечения','120°','Яркость на диод','6-7Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 30Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 30Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120300-RGB-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120300-RGB-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom/VST-5050120600-(4)-800x800.jpg'),104.80,0, 'Количество светодиодов', '30 шт/метр', 'Тип светодиодов', 'SMD 5050','Цвет', 'RGB', 'Мощность', '9.6 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '10 см (3 светодиода)', 'Рабочая температура', '-20 до 30°C','Рабочий ток','0,6 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','18-20Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120600-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/VP-5050120600-RGB%20-(6)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120600-WW-(3)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120600-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120600-W-(3)-800x800.jpg'),104.80,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 5050','Цвет', 'RGB','Цвет', 'Белый','Цвет', 'Тепло-белый', 'Мощность', '14.4 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-20 до 30°C','Рабочий ток','1,2 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','20-22Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5630 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5630 60Д.М. НЕГЕРМЕТИЧНАЯ (IP33) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5630120600-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5630120600-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5630120600-W-(3)-800x800.jpg'),170.30,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 5630','Цвет', 'Белый', 'Мощность', '14.4 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-20 до 30°C','Рабочий ток','1,2 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP33','Угол свечения','120°','Яркость на диод','50Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. ГЕРМЕТИЧНАЯ (IP65) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. ГЕРМЕТИЧНАЯ (IP65) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/products/2062/25_3909483390-800x800.jpg'),183.40,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 5050','Цвет', 'Белый','Цвет', 'RGB', 'Мощность', '14.4 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','1,2 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP65','Угол свечения','120°','Яркость на диод','18-20Lm');

        create_product('СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. ГЕРМЕТИЧНАЯ (IP65) PREMIUM',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','СВЕТОДИОДНАЯ ЛЕНТА VENOM SMD 5050 60Д.М. ГЕРМЕТИЧНАЯ (IP65) PREMIUM',array('https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120601-W-(1)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120601-W-(2)-800x800.jpg','https://ledstorm.ua/image/cache/catalog/photo/venom2/VP-5050120601-W-(3)-800x800.jpg'),183.40,0, 'Количество светодиодов', '60 шт/метр', 'Тип светодиодов', 'SMD 5050', 'Мощность', '14.4 Вт/метр', 'Гарантия', '2 года', 'Напряжение', '12V', 'Производитель', 'Venom', 'Кратность резки', '5 см (3 светодиода)', 'Рабочая температура', '-40 до 80°C','Рабочий ток','1,2 А/метр','Размер','5000х10х2,5мм','Срок службы','50 000 часов','Степень защиты','IP65','Угол свечения','120°','Яркость на диод','18-20Lm');

    }

    function add_projects(){
        create_product('MURAKAMI',$type,$sub_type,'Террасы','Летние площадки','MURAKAMI',array('http://bizon.co.ua/_include/img/work/full/image-l2-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('METRO',$type,$sub_type,'Вывески','Для магазинов сети METRO мы сделали фриз из ПВХ. На один объект израсходовано 80 листов ПВХ 3х2 метра','METRO',array('http://bizon.co.ua/_include/img/work/thumbs/image-30.jpg','http://bizon.co.ua/_include/img/work/full/image-30-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('METRO',$type,$sub_type,'Конструкции','Для магазинов сети METRO мы сделали фриз из ПВХ. На один объект израсходовано 80 листов ПВХ 3х2 метра','METRO',array('http://bizon.co.ua/_include/img/work/thumbs/image-30.jpg','http://bizon.co.ua/_include/img/work/full/image-30-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Кофе Тайм',$type,$sub_type,'Террасы','Летняя площадка для ресторана КОФЕ ТАЙМ на ул. Богдана Хмельницкого, 16-22','Кофе Тайм',array('http://bizon.co.ua/_include/img/work/thumbs/image-l1.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('TARANTINO Москва',$type,$sub_type,'Вывески','Вывеска для ресторана','TARANTINO Москва',array('http://bizon.co.ua/_include/img/work/thumbs/image-31.jpg','http://bizon.co.ua/_include/img/work/full/image-31-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('iLMolino',$type,$sub_type,'Вывески','Ресторан-пиццерию сети ILMOLINO мы украсили лаконичной вывеской, настенным и торцевым лайтбоксом. Для создания уюта дополнили интерьер оригинальными люстрами. Ну, а чтобы гости поскорее узнали об открытии ресторана - сделали и закрепили большой баннер.','iLMolino',array('http://bizon.co.ua/_include/img/work/thumbs/image-01.jpg','http://bizon.co.ua/_include/img/work/full/image-01-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('iLMolino',$type,$sub_type,'Интерьер','Ресторан-пиццерию сети ILMOLINO мы украсили лаконичной вывеской, настенным и торцевым лайтбоксом. Для создания уюта дополнили интерьер оригинальными люстрами. Ну, а чтобы гости поскорее узнали об открытии ресторана - сделали и закрепили большой баннер.','iLMolino',array('http://bizon.co.ua/_include/img/work/full/image-01-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-01.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Time of Style',$type,$sub_type,'Вывески','Яркая вывеска магазина Time Of Style: объемные световые буквы из акрила со светодиодами.','Time of Style',array('http://bizon.co.ua/_include/img/work/thumbs/image-28.jpg','http://bizon.co.ua/_include/img/work/full/image-28-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('The Burger',$type,$sub_type,'Вывески','Ресторан THE BURGER, который расположился в центре АРЕНА мы обеспечили уникальной вывеской: фриз из термостойкой древесины с буквами с контражурной светодиодной подсветкой.','The Burger',array('http://bizon.co.ua/_include/img/work/thumbs/image-29.jpg','http://bizon.co.ua/_include/img/work/full/image-29-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Пилон KFC',$type,$sub_type,'Конструкции','Уникальная конструкция фирменного бакета KFC достигает в диаметре 5 метров. Верх и низ сделаны из композитного листа, боковушка - литой баннер с УФ-печатью.','Пилон KFC',array('http://bizon.co.ua/_include/img/work/thumbs/image-03.jpg','http://bizon.co.ua/_include/img/work/full/image-03-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Сушия',$type,$sub_type,'Интерьер','Для интерьера ресторанов СУШИЯ мы традиционно изготавливаем разноцветные фирменные светильники и аквакамеры с волшебными пузырьками.','Сушия',array('http://bizon.co.ua/_include/img/work/full/image-08-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Мураками',$type,$sub_type,'Конструкции','Стелла для ресторана сети МУРАКАМИ была изготовлена и установлена нами в течение недели. Теперь с проспекта Победы отлично видно и локацию ресторана, и его меню.','Мураками',array('http://bizon.co.ua/_include/img/work/thumbs/image-04.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('UDP',$type,$sub_type,'Вывески','Офис компании UDP: вывески, обшивка фасада, внутренние элементы','UDP',array('http://bizon.co.ua/_include/img/work/thumbs/image-32.jpg','http://bizon.co.ua/_include/img/work/full/image-32-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('UDP',$type,$sub_type,'Интерьер','Офис компании UDP: вывески, обшивка фасада, внутренние элементы','UDP',array('http://bizon.co.ua/_include/img/work/full/image-32-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-32.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Тарантино',$type,$sub_type,'Конструкции','Этот волшебный золотой кубик был разработан нашими конструкторами для ресторана ТАРАНТИНО и является одной из главных достопримечательностей сердца Подола - улицы Сагайдачного','Тарантино',array('http://bizon.co.ua/_include/img/work/thumbs/image-05.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Тарантино',$type,$sub_type,'Интерьер','Украшение барной стойки - золотистый логотип из фрезерованного акрила на фоне срубов. Но на заднем фоне еще красуется уникальная подставка для бутылок, сделанная нашими сварщиками.','Тарантино',array('http://bizon.co.ua/_include/img/work/thumbs/image-09.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Тарантино',$type,$sub_type,'Вывески','Украшение барной стойки - золотистый логотип из фрезерованного акрила на фоне срубов. Но на заднем фоне еще красуется уникальная подставка для бутылок, сделанная нашими сварщиками.','Тарантино',array('http://bizon.co.ua/_include/img/work/thumbs/image-09.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Сушия',$type,$sub_type,'Вывески','В марте 2014 года нами был сделан проект для нового ресторана СУШИЯ: вывеска, торцевой лайтбокс, предметы интерьера: светильники и аквакамеры.','Сушия',array('http://bizon.co.ua/_include/img/work/thumbs/image-09.jpg','http://bizon.co.ua/_include/img/work/full/image-06-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Сушия',$type,$sub_type,'Вывески','В марте 2014 года нами был сделан проект для нового ресторана СУШИЯ: вывеска, торцевой лайтбокс, предметы интерьера: светильники и аквакамеры.','Сушия',array('http://bizon.co.ua/_include/img/work/full/image-06-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-09.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Just Relax',$type,$sub_type,'Вывески','Огромная вывеска, много оригинальных элементов, таких как: мерцающие светодиоды, козырек, сваренный из металлопрофиля и покрытый листами... Внутри тоже много деталей, сделанных нами: светящиеся картины из настоящих гитар, подсветка на мотоцикле... Очень интересное получилось заведение.','Just Relax',array('http://bizon.co.ua/_include/img/work/thumbs/image-07.jpg','http://bizon.co.ua/_include/img/work/full/image-07-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Just Relax',$type,$sub_type,'Интерьер','Огромная вывеска, много оригинальных элементов, таких как: мерцающие светодиоды, козырек, сваренный из металлопрофиля и покрытый листами... Внутри тоже много деталей, сделанных нами: светящиеся картины из настоящих гитар, подсветка на мотоцикле... Очень интересное получилось заведение.','Just Relax',array('http://bizon.co.ua/_include/img/work/full/image-07-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-07.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Маркизы',$type,$sub_type,'Конструкции','Стильные и действительно красивые маркизы сделаны во французском стиле. Маркизы снабжены дистанционной системой автоматического открытия/закрытия. Мы гордимся подобными работами.','Маркизы',array('http://bizon.co.ua/_include/img/work/thumbs/image-10.jpg','http://bizon.co.ua/_include/img/work/full/image-10-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Mafia',$type,$sub_type,'Вывески','Один из постоянных заказчиков - сеть ресторанов МАФИЯ. Для них делаем всю наружную рекламу: вывески, торцевые лайтбоксы, предметы интерьера. Их орнаменты фрезеруем, тщательно выклеиваем пленкой, снабжаем светодиодами и монтируем на необходимой высоте.','Mafia',array('http://bizon.co.ua/_include/img/work/thumbs/image-11.jpg','http://bizon.co.ua/_include/img/work/full/image-11-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Mafia',$type,$sub_type,'Интерьер','Один из постоянных заказчиков - сеть ресторанов МАФИЯ. Для них делаем всю наружную рекламу: вывески, торцевые лайтбоксы, предметы интерьера. Их орнаменты фрезеруем, тщательно выклеиваем пленкой, снабжаем светодиодами и монтируем на необходимой высоте.','Mafia',array('http://bizon.co.ua/_include/img/work/full/image-11-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-11.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Domino\'s pizza',$type,$sub_type,'Вывески','Для сети DOMINO\'S PIZZA сделано немало огромных вывесок и обклеено много стекол. Американский стиль - в максимально большом размере всей наружной рекламы. А там, где не видно вывеску - ставится дверь, у которой можно подождать свою пиццу :)...','Domino\'s pizza',array('http://bizon.co.ua/_include/img/work/thumbs/image-12.jpg','http://bizon.co.ua/_include/img/work/full/image-12-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Domino\'s pizza',$type,$sub_type,'Конструкции','Для сети DOMINO\'S PIZZA сделано немало огромных вывесок и обклеено много стекол. Американский стиль - в максимально большом размере всей наружной рекламы. А там, где не видно вывеску - ставится дверь, у которой можно подождать свою пиццу :)...','Domino\'s pizza',array('http://bizon.co.ua/_include/img/work/full/image-12-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-12.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Зелена Галерея',$type,$sub_type,'Вывески','Зелена галерея','Зелена Галерея',array('http://bizon.co.ua/_include/img/work/thumbs/image-13.jpg','http://bizon.co.ua/_include/img/work/full/image-13-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Зелена Галерея',$type,$sub_type,'Интерьер','Зелена галерея','Зелена Галерея',array('http://bizon.co.ua/_include/img/work/thumbs/image-13.jpg','http://bizon.co.ua/_include/img/work/full/image-13-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Коник',$type,$sub_type,'Конструкции','Коник','Коник',array('http://bizon.co.ua/_include/img/work/thumbs/image-14.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('BeerFish',$type,$sub_type,'Вывески','BeerFish','BeerFish',array('http://bizon.co.ua/_include/img/work/thumbs/image-15.jpg','http://bizon.co.ua/_include/img/work/full/image-15-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('L\'KAFA',$type,$sub_type,'Вывески','L\'KAFA','L\'KAFA',array('http://bizon.co.ua/_include/img/work/thumbs/image-16.jpg','http://bizon.co.ua/_include/img/work/full/image-16-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Биокамин',$type,$sub_type,'Конструкции','Биокамин','Биокамин',array('http://bizon.co.ua/_include/img/work/thumbs/image-17.jpg','http://bizon.co.ua/_include/img/work/full/image-17-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Биокамин',$type,$sub_type,'Интерьер','Биокамин','Биокамин',array('http://bizon.co.ua/_include/img/work/thumbs/image-17.jpg','http://bizon.co.ua/_include/img/work/full/image-17-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Крила',$type,$sub_type,'Вывески','Крила','Крила',array('http://bizon.co.ua/_include/img/work/thumbs/image-18.jpg','http://bizon.co.ua/_include/img/work/full/image-18-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Венские булочки',$type,$sub_type,'Вывески','Венские булочки','Венские булочки',array('http://bizon.co.ua/_include/img/work/thumbs/image-19.jpg','http://bizon.co.ua/_include/img/work/full/image-19-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Фрезеровка',$type,$sub_type,'Конструкции','Фрезер в работе','Фрезеровка',array('http://bizon.co.ua/_include/img/work/thumbs/image-20.jpg','http://bizon.co.ua/_include/img/work/full/image-20-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('м.Оливье',$type,$sub_type,'Вывески','м.Оливье','м.Оливье',array('http://bizon.co.ua/_include/img/work/thumbs/image-21.jpg','http://bizon.co.ua/_include/img/work/full/image-21-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Frederic Moreno',$type,$sub_type,'Вывески','Frederic Moreno','Frederic Moreno',array('http://bizon.co.ua/_include/img/work/thumbs/image-22.jpg','http://bizon.co.ua/_include/img/work/full/image-22-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Кофе Тайм',$type,$sub_type,'Интерьер','Кофе Тайм','Кофе Тайм',array('http://bizon.co.ua/_include/img/work/thumbs/image-23.jpg','http://bizon.co.ua/_include/img/work/full/image-23-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Кофе Тайм',$type,$sub_type,'Вывески','Кофе Тайм','Кофе Тайм',array('http://bizon.co.ua/_include/img/work/full/image-23-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-23.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Кофе Тайм',$type,$sub_type,'Террасы','Кофе Тайм','Кофе Тайм',array('http://bizon.co.ua/_include/img/work/full/image-23-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-23.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Мураками',$type,$sub_type,'Вывески','Мураками','Мураками',array('http://bizon.co.ua/_include/img/work/thumbs/image-24.jpg','http://bizon.co.ua/_include/img/work/full/image-24-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Tassimo',$type,$sub_type,'Конструкции','Tassimo','Tassimo',array('http://bizon.co.ua/_include/img/work/thumbs/image-25.jpg','http://bizon.co.ua/_include/img/work/full/image-25-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('GoSushi',$type,$sub_type,'Вывески','GoSushi','GoSushi',array('http://bizon.co.ua/_include/img/work/thumbs/image-26.jpg','http://bizon.co.ua/_include/img/work/full/image-26-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('GoSushi',$type,$sub_type,'Интерьер','GoSushi','GoSushi',array('http://bizon.co.ua/_include/img/work/full/image-26-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-26.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('GoSushi',$type,$sub_type,'Конструкции','GoSushi','GoSushi',array('http://bizon.co.ua/_include/img/work/full/image-26-full.jpg','http://bizon.co.ua/_include/img/work/thumbs/image-26.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);
        create_product('Разное',$type,$sub_type,'Вывески','Разное','Разное',array('http://bizon.co.ua/_include/img/work/thumbs/image-27.jpg','http://bizon.co.ua/_include/img/work/full/image-27-full.jpg'),'от 10000',0, $spec1_name, $spec1_value, $spec2_name, $spec2_value, $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value,$spec10_name, $spec10_value,$spec11_name, $spec11_value,$spec12_name, $spec12_value,$spec13_name, $spec13_value,$spec14_name, $spec14_value,$spec15_name, $spec15_value,$spec16_name, $spec16_value,$spec17_name, $spec17_value,$spec18_name, $spec18_value,$spec19_name, $spec19_value,$spec20_name, $spec20_value,$spec21_name, $spec21_value,$spec22_name, $spec22_value,$spec23_name, $spec23_value,$spec24_name, $spec24_value,$spec25_name, $spec25_value);

    }
    function add_goq(){
        create_product('GOQ 1 LED (WHITE) SHALLOW','Требует модерации','http://goqled.co.kr/wp-content/uploads/2015/04/1LEDWHITE_shallow.pdf','Светодиоды','Светодиоды','GOQ 1 LED (WHITE) SHALLOW',array('http://goqled.co.kr/wp-content/uploads/2015/04/frosted1led_s1.png','http://goqled.co.kr/wp-content/uploads/2015/04/frosted1led.png'),1,0, 'Цвет', 'Белый', 'Мощность', '1.08 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Производитель', 'Samsung', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','14х12х10мм','Степень защиты','IP68','Угол свечения','160°','Вес','2.2 г','Яркость','30Lm');

        create_product('GOQ 2 MINI SHALLOW','Требует модерации','http://goqled.co.kr/wp-content/uploads/2015/03/2LEDMINIWHITE_shallow.pdf','Светодиоды','Светодиоды','GOQ 2 MINI SHALLOW',array('http://goqled.co.kr/wp-content/uploads/2015/03/frosted2led_s.png','http://goqled.co.kr/wp-content/uploads/2015/03/frosted2led.png'),1,0,'Цвет', 'Белый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Производитель', 'Samsung', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','34х11.6х9мм','Степень защиты','IP68','Угол свечения','160°','Вес','3.8 г','Яркость','60Lm');

        create_product('GOQ 3 LED (WHITE) SHALLOW','Требует модерации','http://goqled.co.kr/wp-content/uploads/2015/03/3LEDWHITE_shallow.pdf','Светодиоды','Светодиоды','GOQ 3 LED (WHITE) SHALLOW',array('http://goqled.co.kr/wp-content/uploads/2015/03/frosted3led_s.png','http://goqled.co.kr/wp-content/uploads/2015/03/F3led1.jpg','http://goqled.co.kr/wp-content/uploads/2015/03/frosted3led.png'),1,0,'Цвет', 'Белый', 'Мощность', '1.08 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Производитель', 'Samsung', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,09 А','Размер','66х15х10.5мм','Степень защиты','IP68','Угол свечения','160°','Вес','8 г','Яркость','90Lm');

        create_product('GOQ 3 LED TYPE E','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED TYPE E',array('http://goqled.co.kr/wp-content/uploads/2014/12/te_display.png','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_7_goq_3_led1.jpg'),1,0,'Цвет', 'Белый', 'Мощность', '1.08 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Производитель', 'SOLLEDS', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','70Lm');

        create_product('GOQ-SBB','Требует модерации','Гарантия','Коробочки','Коробочки','GOQ-SBB',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_3.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_4.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_5.jpg'),1,0,'Размер','410x240x150мм');
        create_product('GOQ-SBM','Требует модерации','Гарантия','Коробочки','Коробочки','GOQ-SBM',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_3.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_4.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_5.jpg'),1,0,'Размер','265x185x115мм');
        create_product('GOQ-SBS','Требует модерации','Гарантия','Коробочки','Коробочки','GOQ-SBS',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_3.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_4.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/etc_sbb-sbm-sbs_5.jpg'),1,0,'Размер','245x165x100мм');
        create_product('GOQ-RGBCON','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/RGB-CONTROLLEReng.pdf','Модули','Модули','GOQ-RGBCON',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_39_goq_rgb_con.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_40_goq_rgb_con.jpg'),1,0,'Рабочее напряжение','9-15V','Макс. подключаемых модулей','300 EA','Граничное значение тока','18 А','Количество программ','9 шт','Рабочая температура','-20 до 60°C');

        create_product('SMART-100W','Требует модерации','Гарантия','Источники питания','Источники питания','SMART-100W',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_single_output_1.jpg'),1,0,'Входное напряжение','180-260V','Макс. Выходная Мощность','100 Вт','Выходное напряжение','12V','Выходная сила тока','7,2 A','Макс. Выходная Мощность','86.4 Вт','Вес','860 г','Размер','169x78.3x50.3мм');
        create_product('SMART-150W','Требует модерации','Гарантия','Источники питания','Источники питания','SMART-150W',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_single_output_1.jpg'),1,0,'Входное напряжение','180-260V','Макс. Выходная Мощность','150 Вт','Выходное напряжение','12V','Выходная сила тока','12 A','Макс. Выходная Мощность','144 Вт','Вес','830 г','Размер','169x78.3x50.3мм');
        create_product('SMART-200W','Требует модерации','Гарантия','Источники питания','Источники питания','SMART-200W',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_single_output_1.jpg'),1,0,'Входное напряжение','180-260V','Макс. Выходная Мощность','200 Вт','Выходное напряжение','12V','Выходная сила тока','16,5 A','Макс. Выходная Мощность','198 Вт','Вес','955 г','Размер','169x78.3x50.3мм');
        create_product('SMART-300W','Требует модерации','Гарантия','Источники питания','Источники питания','SMART-300W',array('http://goqled.co.kr/wp-content/uploads/2014/07/etc_single_output_1.jpg'),1,0,'Входное напряжение','180-260V','Макс. Выходная Мощность','300 Вт','Выходное напряжение','12V','Выходная сила тока','23 A','Макс. Выходная Мощность','276 Вт','Вес','1400 г','Размер','216x97.3x54.7мм');

        create_product('GOQ LED BAR','Требует модерации','Полная модерация','Светодиодные ленты','Светодиодные ленты','GOQ LED BAR',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_35_goq_led_bar.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_36_goq_led_bar.jpg'),83.84,0, 'Количество светодиодов', '24 шт/метр', 'Цвет', 'Красный','Цвет', 'Зеленый','Цвет', 'Синий','Цвет', 'Белый','Цвет', 'RGB', 'Мощность', '5.76 Вт/метр', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-40 до 85°C','Рабочий ток','0,48 А/метр','Размер','500х12х7мм','Угол свечения','120°','Яркость на диод','8-10Lm');

        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_4_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_6_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_7_goq_4_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','120°','Вес','11 г','Яркость','92Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_4_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_6_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_7_goq_4_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','120°','Вес','11 г','Яркость','32Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_4_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_6_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_7_goq_4_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','120°','Вес','11 г','Яркость','64Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_4_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_6_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_7_goq_4_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','120°','Вес','11 г','Яркость','28Lm');

        create_product('GOQ RGB 4 LED','Требует модерации','Гарантия,Категория','Модули','Модули','GOQ RGB 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_31_goq_rgb4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_33_goq_rgb4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_34_goq_rgb4_led.jpg'),1,0, 'Цвет', 'RGB', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','44х42х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','20 г');

        create_product('GOQ RGB 3 LED','Требует модерации','Гарантия,Категория','Модули','Модули','GOQ RGB 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_25_goq_rgb3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_27_goq_rgb3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_28_goq_rgb3_led.jpg'),1,0, 'Цвет', 'RGB', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г');

        create_product('GOQ Mini LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ Mini LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_21_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_22_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_23_goq_mini_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,04 А','Размер','30х8.3х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.8 г','Яркость','42Lm');
        create_product('GOQ Mini LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ Mini LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_21_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_22_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_23_goq_mini_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,04 А','Размер','30х8.3х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.8 г','Яркость','6Lm');
        create_product('GOQ Mini LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ Mini LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_21_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_22_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_23_goq_mini_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,04 А','Размер','30х8.3х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.8 г','Яркость','13Lm');
        create_product('GOQ Mini LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ Mini LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_21_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_22_goq_mini_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_23_goq_mini_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,04 А','Размер','30х8.3х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.8 г','Яркость','5Lm');

        create_product('GOQ 5 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 5 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_16_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_17_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_18_goq_5_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','60х45х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','25 г','Яркость','115Lm');
        create_product('GOQ 5 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 5 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_16_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_17_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_18_goq_5_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','60х45х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','25 г','Яркость','40Lm');
        create_product('GOQ 5 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 5 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_16_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_17_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_18_goq_5_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','60х45х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','25 г','Яркость','80Lm');
        create_product('GOQ 5 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 5 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_16_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_17_goq_5_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_18_goq_5_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','60х45х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','25 г','Яркость','35Lm');

        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_14_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_15_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_12_goq_4_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','42х42х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','20 г','Яркость','92Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_14_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_15_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_12_goq_4_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','42х42х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','20 г','Яркость','32Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_14_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_15_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_12_goq_4_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','42х42х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','20 г','Яркость','64Lm');
        create_product('GOQ 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_14_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_15_goq_4_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_12_goq_4_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,12 А','Размер','42х42х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','20 г','Яркость','28Lm');

        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_9_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_13_goq_3_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','69Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_9_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_13_goq_3_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','24Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_9_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_13_goq_3_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','48Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_9_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_13_goq_3_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','21Lm');

        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_7_goq_2_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_6_goq_2_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','46Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_7_goq_2_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_6_goq_2_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','16Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_7_goq_2_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_6_goq_2_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','32Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_7_goq_2_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_5_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_6_goq_2_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,06 А','Размер','69х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','11.6 г','Яркость','14Lm');

        create_product('GOQ HP 2S-W165','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/HIGHPOWERLEDMODULE.pdf','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_2.jpg','http://goqled.co.kr/wp-content/uploads/2014/12/hp_angle.png','http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_51-300x185.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_6-300x185.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '2.5 Вт', 'Гарантия', '1 месяц', 'Напряжение', '9-12V','Рабочий ток','0,208 А','Производитель','Samsung','Степень защиты','IP65','Угол свечения','165°','Вес','11.6 г','Яркость','184Lm','Температура цвета','6.5 тыс. К');
        create_product('GOQ HP-N60','Требует модерации',    'http://goqled.co.kr/wp-content/uploads/2014/07/HIGHPOWERLEDMODULE.pdf','Светодиоды','Светодиоды','GOQ 2 LED',    array('http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_2.jpg','http://goqled.co.kr/wp-content/uploads/2014/12/hp_angle.png','http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_51-300x185.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/high_power_led_module_6-300x185.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '2.5 Вт', 'Гарантия', '1 месяц', 'Напряжение', '9-12V', 'Рабочий ток','0,208 А','Производитель','Samsung','Степень защиты','IP65','Угол свечения','60°','Вес','11.6 г','Яркость','170Lm','Температура цвета','6.5 тыс. К');

        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_1_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_2_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_3_goq_3_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','120°','Вес','8 г','Яркость','69Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_1_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_2_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_3_goq_3_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','120°','Вес','8 г','Яркость','24Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_1_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_2_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_3_goq_3_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','120°','Вес','8 г','Яркость','48Lm');
        create_product('GOQ 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_1_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_2_goq_3_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/epoxy_type_3_goq_3_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','120°','Вес','8 г','Яркость','21Lm');

        create_product('GOQ 1 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 1 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_1_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_2_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_3_goq_1_led.jpg'),1,0, 'Цвет', 'Белый', 'Мощность', '0.36 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,03 А','Размер','16х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.4 г','Яркость','23Lm');
        create_product('GOQ 1 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 1 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_1_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_2_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_3_goq_1_led.jpg'),1,0, 'Цвет', 'Красный', 'Мощность', '0.36 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,03 А','Размер','16х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.4 г','Яркость','8Lm');
        create_product('GOQ 1 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 1 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_1_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_2_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_3_goq_1_led.jpg'),1,0, 'Цвет', 'Зеленый', 'Мощность', '0.36 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,03 А','Размер','16х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.4 г','Яркость','16Lm');
        create_product('GOQ 1 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 1 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_1_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_2_goq_1_led.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/pvc_type_3_goq_1_led.jpg'),1,0, 'Цвет', 'Синий', 'Мощность', '0.36 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-20 до 70°C','Рабочий ток','0,03 А','Размер','16х14х7.4мм','Степень защиты','IP67','Угол свечения','120°','Вес','3.4 г','Яркость','7Lm');

        create_product('GOQ RGB 4 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ RGB 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_13_goq_rgb_4_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_14_goq_rgb_4_led.jpg'),1,0, 'Цвет', 'RGB', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','150°','Вес','11 г');

        create_product('GOQ RGB 3 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ RGB 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led3_rgb_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_12_goq_rgb_3_led.jpg'),1,0, 'Цвет', 'RGB', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Производитель','DKI','Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г');

        create_product('GOQ 4 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/4LEDMODULEWHITE.pdf','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led4_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led4_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_9_goq_4_led.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Белый', 'Мощность', '2.16 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,18 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','150°','Вес','11 г','Яркость','120Lm');
        create_product('GOQ 4 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/4LEDMODULERED.pdf','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led4_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led4_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_9_goq_4_led.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Красный', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','150°','Вес','11 г','Яркость','32Lm');
        create_product('GOQ 4 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/4LEDMODULEGREEN.pdf','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led4_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led4_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_9_goq_4_led.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Зеленый', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','150°','Вес','11 г','Яркость','64Lm');
        create_product('GOQ 4 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/4LEDMODULEBLUE.pdf','Светодиоды','Светодиоды','GOQ 4 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led4_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led4_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_9_goq_4_led.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Синий', 'Мощность', '1.44 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,12 А','Размер','44х44х9мм','Степень защиты','IP68','Угол свечения','150°','Вес','11 г','Яркость','28Lm');

        create_product('GOQ 3 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/3LEDMODULEWHITE.pdf','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led3_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_7_goq_3_led1.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Белый', 'Мощность', '1.08 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,09 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','120Lm');
        create_product('GOQ 3 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/3LEDMODULERED.pdf','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led3_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_7_goq_3_led1.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Красный', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','24Lm');
        create_product('GOQ 3 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/3LEDMODULEGREEN.pdf','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led3_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_7_goq_3_led1.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Зеленый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','48Lm');
        create_product('GOQ 3 LED','Требует модерации','http://goqled.co.kr/wp-content/uploads/2014/07/3LEDMODULEBLUE.pdf','Светодиоды','Светодиоды','GOQ 3 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/led3_lens_type.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/led3_dimension.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_7_goq_3_led1.jpg'),1,0,'Производитель','DKI', 'Цвет', 'Синий', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','21Lm');

        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_4_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_5_goq_2_led.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Белый', 'Мощность', '1.08 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,09 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','60Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_4_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_5_goq_2_led.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Красный', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','16Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_4_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_5_goq_2_led.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Зеленый', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','32Lm');
        create_product('GOQ 2 LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ 2 LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_4_goq_2_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_5_goq_2_led.jpg'),1,0,'Производитель','Samsung', 'Цвет', 'Синий', 'Мощность', '0.72 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,06 А','Размер','66х15х8.5мм','Степень защиты','IP68','Угол свечения','150°','Вес','8 г','Яркость','24Lm');

        create_product('GOQ MINI LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ MINI LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_1_goq_mini_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_3_goq_mini_led.jpg'),1,0,'Производитель','Корея', 'Цвет', 'Белый', 'Мощность', '0.48 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,04 А','Размер',  '30х12х7.4мм','Степень защиты','IP68','Угол свечения','150°','Вес','3.8 г','Яркость','42Lm');
        create_product('GOQ MINI LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ MINI LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_1_goq_mini_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_3_goq_mini_led.jpg'),1,0,'Производитель','Корея', 'Цвет', 'Красный', 'Мощность', '0.48 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,04 А','Размер','30х12х7.4мм','Степень защиты','IP68','Угол свечения','150°','Вес','3.8 г','Яркость','6Lm');
        create_product('GOQ MINI LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ MINI LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_1_goq_mini_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_3_goq_mini_led.jpg'),1,0,'Производитель','Корея', 'Цвет', 'Зеленый', 'Мощность', '0.48 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,04 А','Размер','30х12х7.4мм','Степень защиты','IP68','Угол свечения','150°','Вес','3.8 г','Яркость','13Lm');
        create_product('GOQ MINI LED','Требует модерации','Гарантия,Яркость','Светодиоды','Светодиоды','GOQ MINI LED',array('http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_1_goq_mini_led1.jpg','http://goqled.co.kr/wp-content/uploads/2014/07/lens_type_3_goq_mini_led.jpg'),1,0,'Производитель','Корея', 'Цвет', 'Синий', 'Мощность', '0.48 Вт', 'Гарантия', '1 месяц', 'Напряжение', '12V', 'Рабочая температура', '-30 до 85°C','Рабочий ток','0,04 А','Размер',  '30х12х7.4мм','Степень защиты','IP68','Угол свечения','150°','Вес','3.8 г','Яркость','5Lm');

    }

    function add_gp_1(){
        //http://www.glacialpower.com/products/led-driver-General-2.htm
        create_product('GP‐LC3536‐0A',$type,$sub_type,'Источники питания','Источники питания','GP‐LC3536‐0A', array('product_19.jpeg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','3-36V','Выходная сила тока', '0,35 A',  'Макс. Выходная Мощность', '8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','120 г','Размер','68x37x28.4мм','Входная сила тока','0,3 A при 115V / 0,2 A при 230V');
        create_product('GP‐LC7021‐0A',$type,$sub_type,'Источники питания','Источники питания','GP‐LC7021‐0A', array('product_19.jpeg'),1,0, 'Выходное напряжение', '21V', 'Область постоянного тока','3-21V','Выходная сила тока', '0,7 A',   'Макс. Выходная Мощность', '9 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','120 г','Размер','68x37x28.4мм','Входная сила тока','0,3 A при 115V / 0,2 A при 230V');


        create_product('GP‐LC3536‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LC3536‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','3-36V','Выходная сила тока', '0,35 A',  'Макс. Выходная Мощность', '8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '90-264V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');
        create_product('GP‐LC7021‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LC7021‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '21V', 'Область постоянного тока','3-21V','Выходная сила тока', '0,7 A',   'Макс. Выходная Мощность', '9 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '90-264V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');

        create_product('GP-LC3536-05',$type,$sub_type,'Источники питания','Источники питания','GP-LC3536-05', array('product_19.jpeg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','3-36V','Выходная сила тока', '0,35 A',   'Макс. Выходная Мощность', '12 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','200 г','Размер','65x44x28мм','Входная сила тока','0,3 A при 115V / 0,15 A при 230V');


        create_product('GP‐LC3512‐06',$type,$sub_type,'Источники питания','Источники питания','GP‐LC3512‐06', array('product_19.jpeg'),1,0, 'Выходное напряжение', '8V', 'Область постоянного тока','3-8V', 'Выходная сила тока','0,35 A',  'Макс. Выходная Мощность', '2.4 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '65%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','50 г','Размер','36.5x29x22мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');
        create_product('GP‐LC3513‐06',$type,$sub_type,'Источники питания','Источники питания','GP‐LC3513‐06', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Область постоянного тока','6-12V','Выходная сила тока','0,35 A',  'Макс. Выходная Мощность', '3.6 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','50 г','Размер','36.5x29x22мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');
        create_product('GP‐LC7012‐06',$type,$sub_type,'Источники питания','Источники питания','GP‐LC7012‐06', array('product_19.jpeg'),1,0, 'Выходное напряжение', '5V', 'Область постоянного тока','3-5V', 'Выходная сила тока','0,7 A',   'Макс. Выходная Мощность', '3 Вт',   'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '60%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','50 г','Размер','36.5x29x22мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');


        create_product('GP-LC3536-08',$type,$sub_type,'Источники питания','Источники питания','GP-LC3536-08', array('product_19.jpeg'),1,0, 'Выходное напряжение', '36V','Область постоянного тока','3-36V','Выходная сила тока','0,35 A', 'Макс. Выходная Мощность', '8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','105 г','Размер','50x43x23мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');
        create_product('GP-LC7021-08',$type,$sub_type,'Источники питания','Источники питания','GP-LC7021-08', array('product_19.jpeg'),1,0, 'Выходное напряжение', '21V','Область постоянного тока','6-21V','Выходная сила тока','0,7 A',  'Макс. Выходная Мощность', '9 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','105 г','Размер','50x43x23мм','Входная сила тока','0,2 A при 115V / 0,1 A при 230V');




        create_product('GP‐LV5012‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LV5012‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока','0-0,5 A', 'Макс. Выходная Мощность', '6 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '100-240V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,22 A при 115V / 0,14 A при 230V');
        create_product('GP‐LV8312‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LV8312‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока','0-0,83 A','Макс. Выходная Мощность', '10 Вт', 'Гарантия', '1 месяц','Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '100-240V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,22 A при 115V / 0,14 A при 230V');
        create_product('GP‐LV2524‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LV2524‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока','0-0,25 A','Макс. Выходная Мощность', '6 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '77%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '100-240V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,22 A при 115V / 0,14 A при 230V');
        create_product('GP‐LV4124‐02',$type,$sub_type,'Источники питания','Источники питания','GP‐LV4124‐02', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока','0-0,41 A','Макс. Выходная Мощность', '10 Вт', 'Гарантия', '1 месяц','Производитель', 'GalicialTech', 'КПД', '80%', 'Рабочая температура', '-10 до 40°C', 'Степень защиты','IP65','Входное напряжение', '100-240V','Вес','105 г','Размер','69.5x35x23мм','Входная сила тока','0,22 A при 115V / 0,14 A при 230V');

        create_product('GP‐LVA012‐05',$type,$sub_type,'Источники питания','Источники питания','GP‐LVA012‐05', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока','0-1 A',  'Макс. Выходная Мощность', '12 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','200 г','Размер','65x44x28мм','Входная сила тока','0,3 A при 115V / 0,15 A при 230V');
        create_product('GP‐LV5024‐05',$type,$sub_type,'Источники питания','Источники питания','GP‐LV5024‐05', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока','0-0,5 A','Макс. Выходная Мощность', '12 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','Неопределенно','Входное напряжение', '90-264V','Вес','200 г','Размер','65x44x28мм','Входная сила тока','0,3 A при 115V / 0,15 A при 230V');

        //end http://www.glacialpower.com/products/led-driver-General-2.htm
    }

    function add_gp_3(){

        create_product('GP‐HS05N‐07C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐07C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '7.5V', 'Область постоянного тока', '5-7.5V', 'Выходная сила тока', '0,7 A', 'Макс. Выходная Мощность', '5.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Выходная сила тока','0,15 A при 115V / 0,1 A при 230V');
        create_product('GP‐HS05N‐12C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐12C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V',  'Область постоянного тока', '7-12V',  'Выходная сила тока', '0,35 A','Макс. Выходная Мощность', '4.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Выходная сила тока','0,15 A при 115V / 0,1 A при 230V');
        create_product('GP‐HS05N‐24C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐24C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V',  'Область постоянного тока', '15-24V', 'Выходная сила тока', '0,2 A', 'Макс. Выходная Мощность', '4.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Выходная сила тока','0,15 A при 115V / 0,1 A при 230V');


        create_product('GP‐HS05N‐07C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐07C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '7.5V', 'Область постоянного тока', '5-7.5V', 'Выходная сила тока', '0,7 A', 'Макс. Выходная Мощность', '5.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Входная сила тока','0,15 A при 115V / 0,1 A при 230V');
        create_product('GP‐HS05N‐12C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐12C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V',  'Область постоянного тока', '7-12V',  'Выходная сила тока', '0,35 A','Макс. Выходная Мощность', '4.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Входная сила тока','0,15 A при 115V / 0,1 A при 230V');
        create_product('GP‐HS05N‐24C',$type,$sub_type,'Источники питания','Источники питания','GP‐HS05N‐24C',array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V',  'Область постоянного тока', '15-24V', 'Выходная сила тока', '0,2 A', 'Макс. Выходная Мощность', '4.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '70%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x40.8x24мм','Входная сила тока','0,15 A при 115V / 0,1 A при 230V');

        create_product('GP‐HS08N‐11C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐HS08N‐11C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '11V',  'Область постоянного тока', '3-11V',  'Выходная сила тока', '0,68 A', 'Макс. Выходная Мощность', '7.4 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '73%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x41x24мм','Входная сила тока','0,2 A');
        create_product('GP‐HS08N‐14C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐HS08N‐14C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '14.5V','Область постоянного тока', '5-14.5V','Выходная сила тока', '0,5 A',  'Макс. Выходная Мощность', '7.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x41x24мм','Входная сила тока','0,2 A');
        create_product('GP‐HS08N‐21C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐HS08N‐21C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '21V',  'Область постоянного тока', '10-21V', 'Выходная сила тока', '0,35 A', 'Макс. Выходная Мощность', '7.3 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x41x24мм','Входная сила тока','0,2 A');
        create_product('GP‐HS08N‐21C1',$type,$sub_type,'Источники питания','Источники питания','GP‐HS08N‐21C1',array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V',  'Область постоянного тока', '10-24V', 'Выходная сила тока', '0,3 A',  'Макс. Выходная Мощность', '7.2 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '75%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x41x24мм','Входная сила тока','0,2 A');
        create_product('GP‐HS08N‐28C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐HS08N‐28C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '28V',  'Область постоянного тока', '14-28V', 'Выходная сила тока', '0,25 A', 'Макс. Выходная Мощность', '7 Вт',   'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '78%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '100-240V','Вес','74 г','Размер','57x41x24мм','Входная сила тока','0,2 A');


        create_product('GP‐LE036N‐12V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE036N‐12V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока', '3 A',  'Макс. Выходная Мощность', '36 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '83%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','140 г','Размер','110x35x25мм','Входная сила тока','1 A при 115V / 0,5 A при 230V');
        create_product('GP‐LE036N‐24V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE036N‐24V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока', '1,5 A','Макс. Выходная Мощность', '36 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','140 г','Размер','110x35x25мм','Входная сила тока','1 A при 115V / 0,5 A при 230V');


        create_product('GP‐LE036N‐36C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE036N‐36C', array('product_19.jpeg'),1,0, 'Выходное напряжение','36V', 'Область постоянного тока', '24-36V','Выходная сила тока', '1,05 A',  'Макс. Выходная Мощность', '37.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','200 г','Размер','110x35x25мм','Входная сила тока','1 A при 115V / 0,5 A при 230V');
        create_product('GP‐LE036N‐48C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE036N‐48C', array('product_19.jpeg'),1,0, 'Выходное напряжение','48V', 'Область постоянного тока', '36-48V','Выходная сила тока', '0,7 A',   'Макс. Выходная Мощность', '33.6 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','200 г','Размер','110x35x25мм','Входная сила тока','1 A при 115V / 0,5 A при 230V');


        create_product('GP‐LE060N‐12V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE060N‐12V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока', '5 A',  'Макс. Выходная Мощность', '60 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','370 г','Размер','163x44.2x32.55мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');
        create_product('GP‐LE060N‐24V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE060N‐24V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока', '2,5 A','Макс. Выходная Мощность', '60 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','370 г','Размер','163x44.2x32.55мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');



        create_product('GP‐LE060N‐36C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE060N‐36C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','25-36V','Выходная сила тока', '1,67 A','Макс. Выходная Мощность', '60 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','370 г','Размер','163x44.2x32.5мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');
        create_product('GP‐LE060N‐42C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE060N‐42C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '42V', 'Область постоянного тока','28-42V','Выходная сила тока', '1,4 A', 'Макс. Выходная Мощность', '58.8 Вт', 'Гарантия','1 месяц','Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','370 г','Размер','163x44.2x32.5мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');
        create_product('GP‐LE060N‐48C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE060N‐48C', array('product_19.jpeg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','32-48V','Выходная сила тока', '1,05 A','Макс. Выходная Мощность', '50.4 Вт', 'Гарантия','1 месяц','Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 40°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','370 г','Размер','163x44.2x32.5мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');


        create_product('GP‐LE100N‐12V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE100N‐12V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '12V','Выходная сила тока', '8,5 A','Макс. Выходная Мощность', '102 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '83%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','660 г','Размер','187.5x52x37мм','Входная сила тока','2 A при 115V / 1,2 A при 230V');
        create_product('GP‐LE100N‐24V',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LE100N‐24V', array('product_19.jpeg'),1,0, 'Выходное напряжение', '24V','Выходная сила тока', '4,2 A', 'Макс. Выходная Мощность','100 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','660 г','Размер','187.5x52x37мм','Входная сила тока','2 A при 115V / 1,2 A при 230V');

        create_product('GP‐LC7028‐Q5D',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LC7028‐Q5D', array('product_19.jpeg'),1,0, 'Выходное напряжение', '42V', 'Область постоянного тока','28-42V','Выходная сила тока', '1,4 A', 'Макс. Выходная Мощность','58.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','Неопределенно','Входное напряжение', '100-240V','Вес','700 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0,8 A при 100-240V');

        create_product('GP‐LS100P‐36 1E','Входящие напряжение',$sub_type,'Источники питания','Источники питания', 'GP‐LS100P‐36 1E', array('product_19.jpeg'),1,0, 'Выходное напряжение', '40V', 'Область постоянного тока','30-40V','Выходная сила тока', '2,5 A', 'Макс. Выходная Мощность','100 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');

        create_product('GP‐LS100P‐57 1E','Входящие напряжение',$sub_type,'Источники питания','Источники питания', 'GP‐LS100P‐57 1E', array('product_19.jpeg'),1,0, 'Выходное напряжение', '60V', 'Область постоянного тока','48-60V','Выходная сила тока', '1,65 A', 'Макс. Выходная Мощность','100 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,7 A при 230V');

        create_product('GP‐LS150P‐60','Входящие напряжение',$sub_type,'Источники питания','Источники питания', 'GP‐LS150P‐60', array('product_19.jpeg'),1,0, 'Выходное напряжение', '60V', 'Область постоянного тока','48-60V','Выходная сила тока', '2,5 A', 'Макс. Выходная Мощность','150 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-264V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','2 A при 115V / 1 A при 230V');

        create_product('GP‐LS200P‐60 1E','Входящие напряжение',$sub_type,'Источники питания','Источники питания', 'GP‐LS200P‐60 1E', array('product_19.jpeg'),1,0, 'Выходное напряжение', '60V', 'Область постоянного тока','48-60V','Выходная сила тока', '3,2 A', 'Макс. Выходная Мощность','192 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','244x68x39мм','Входная сила тока','4 A при 115V / 2 A при 230V');

        create_product('GP‐LS70PH‐100C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LS70PH‐100C', array('product_19.jpeg'),1,0, 'Выходное напряжение','100V', 'Область постоянного тока',  '50-100V','Выходная сила тока', '0,7 A','Макс. Выходная Мощность', '70 Вт',   'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','750 г','Размер','198x57x37мм','Входная сила тока','1,2 A при 120V / 0,6 A при 240V');
        create_product('GP‐LS100PH‐142C',$type,$sub_type,'Источники питания','Источники питания','GP‐LS100PH‐142C',array('product_19.jpeg'),1,0, 'Выходное напряжение','142V', 'Область постоянного тока',  '100-142V','Выходная сила тока', '0,7 A','Макс. Выходная Мощность', '99.4 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '91%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','750 г','Размер','198x57x37мм','Входная сила тока','1,2 A при 120V / 0,6 A при 240V');
        create_product('GP‐LS100PH‐71C',$type,$sub_type,'Источники питания','Источники питания', 'GP‐LS100PH‐71C', array('product_19.jpeg'),1,0, 'Выходное напряжение','71V', 'Область постоянного тока',  '50-71V', 'Выходная сила тока', '1,4 A','Макс. Выходная Мощность', '99.4 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '91%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','750 г','Размер','198x57x37мм','Входная сила тока','1,2 A при 120V / 0,6 A при 240V');


        create_product('GP‐LS150PH‐107C',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐107C', array('product_19.jpeg'),1,0, 'Выходное напряжение','107V', 'Область постоянного тока', '30-107V','Выходная сила тока', '1,4 A',  'Макс. Выходная Мощность', '149.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '91%', 'Рабочая температура', '-40 до 55°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐143C',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐143C', array('product_19.jpeg'),1,0, 'Выходное напряжение','143V', 'Область постоянного тока', '60-143V','Выходная сила тока', '1,05 A', 'Макс. Выходная Мощность', '150.1 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 55°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐210C',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐210C', array('product_19.jpeg'),1,0, 'Выходное напряжение','210V', 'Область постоянного тока', '60-210V','Выходная сила тока', '0,7 A',  'Макс. Выходная Мощность', '147 Вт',   'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 55°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐428C',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐428C', array('product_19.jpeg'),1,0, 'Выходное напряжение','428V', 'Область постоянного тока', '120-428V','Выходная сила тока', '0,35 A','Макс. Выходная Мощность', '149.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 55°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');


        create_product('GP‐LS150PH‐107CA',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐107CA', array('product_19.jpeg'),1,0, 'Выходное напряжение', '107V', 'Область постоянного тока','75-107V', 'Выходная сила тока', '1,4 A',  'Макс. Выходная Мощность', '149.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '91%', 'Рабочая температура', '-40 до 60°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐143CA',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐143CA', array('product_19.jpeg'),1,0, 'Выходное напряжение', '143V', 'Область постоянного тока','90-143V', 'Выходная сила тока', '1,05 A', 'Макс. Выходная Мощность', '150.1 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 60°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐210CA',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐210CA', array('product_19.jpeg'),1,0, 'Выходное напряжение', '210V', 'Область постоянного тока','120-210V','Выходная сила тока', '0,7 A',  'Макс. Выходная Мощность', '147 Вт',   'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 60°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');
        create_product('GP‐LS150PH‐428CA',$type,$sub_type,'Источники питания','Источники питания','GP‐LS150PH‐428CA', array('product_19.jpeg'),1,0, 'Выходное напряжение', '428V', 'Область постоянного тока','250-428V','Выходная сила тока', '0,35 A','Макс. Выходная Мощность', '149.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 60°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');

        create_product('GP‐LS60P‐42C 1E',$type,$sub_type,'Источники питания','Источники питания','GP‐LS60P‐42C 1E', array('product_19.jpeg'),1,0, 'Выходное напряжение', '107V', 'Область постоянного тока','42V','Выходная сила тока', '0,35 A','Макс. Выходная Мощность', '149.8 Вт', 'Гарантия', '1 месяц', 'Производитель', 'GalicialTech', 'КПД', '92%', 'Рабочая температура', '-40 до 60°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','226x68x39мм','Входная сила тока','2 A при 120V / 1 A при 240V');

    }
    function add_gp_2(){
        //start http://www.glacialpower.com/products/led-driver-PFC2.htm




        //http://www.glacialpower.com/products/pdf/GP-LS050P.pdf
        create_product('GP-LS050P-12',$type,'http://www.glacialpower.com/products/pdf/GP-LS050P.pdf','Источники питания','Источники питания','GP-LS050P-12', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','8-12V', 'Выходная сила тока', '4,2 A', 'PFC','Есть','Макс. Выходная Мощность', '50 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '82%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 0,94 A при 230V');
        create_product('GP-LS050P-24',$type,'http://www.glacialpower.com/products/pdf/GP-LS050P.pdf','Источники питания','Источники питания','GP-LS050P-24', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','18-24V','Выходная сила тока', '2,1 A', 'PFC','Есть','Макс. Выходная Мощность', '50 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 0,94 A при 230V');
        create_product('GP-LS050P-36',$type,'http://www.glacialpower.com/products/pdf/GP-LS050P.pdf','Источники питания','Источники питания','GP-LS050P-36', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','25-36V','Выходная сила тока', '1.4 A', 'PFC','Есть','Макс. Выходная Мощность', '50 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 0,94 A при 230V');
        create_product('GP-LS050P-48',$type,'http://www.glacialpower.com/products/pdf/GP-LS050P.pdf','Источники питания','Источники питания','GP-LS050P-48', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','33-48V','Выходная сила тока', '1.05 A','PFC','Есть','Макс. Выходная Мощность', '50 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 0,94 A при 230V');

        //http://www.glacialpower.com/products/pdf/GP-LS070P.pdf
        create_product('GP-LS070P-12',$type,     'http://www.glacialpower.com/products/pdf/GP-LS070P.pdf',     'Источники питания','Источники питания','GP-LS070P-12', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','10-12V',                                                                 'Выходная сила тока', '4,9 A','PFC','Есть','Макс. Выходная Мощность', '59 Вт',                                      'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 1 A при 230V');
        create_product('GP-LS070P-24(30V)',$type,'http://www.glacialpower.com/products/pdf/GP-LS070P.pdf','Источники питания','Источники питания','GP-LS070P-24(30V)', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '24V','Выходное напряжение', '30V', 'Область постоянного тока','18-24V','Область постоянного тока','20-30V','Выходная сила тока', '3.2 A','PFC','Есть','Макс. Выходная Мощность', '75 Вт','Макс. Выходная Мощность', '73.5 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 1 A при 230V');
        create_product('GP-LS070P-36',$type,     'http://www.glacialpower.com/products/pdf/GP-LS070P.pdf',     'Источники питания','Источники питания','GP-LS070P-36', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','25-36V',                                                                 'Выходная сила тока', '2.1 A','PFC','Есть','Макс. Выходная Мощность', '75.6 Вт',                                    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 1 A при 230V');
        create_product('GP-LS070P-48(54V)',$type,'http://www.glacialpower.com/products/pdf/GP-LS070P.pdf','Источники питания','Источники питания','GP-LS070P-48(54V)', array('http://www.glacialpower.com/products/images/GP-LS070P-12.jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','33-48V','Выходное напряжение', '54V','Область постоянного тока','37-54V','Выходная сила тока', '1.4 A','PFC','Есть','Макс. Выходная Мощность', '67 Вт','Макс. Выходная Мощность', '75 Вт',   'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-20 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','950 г','Размер','176x68x39мм','Входная сила тока','2 A при 115V / 1 A при 230V');

        //http://www.glacialpower.com/products/pdf/GP-LS45P.pdf
        create_product('GP-LS045P-24C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS45P.pdf','Источники питания','Источники питания','GP-LS045P-24C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','16-24V','Выходная сила тока', '1,85 A', 'PFC','Есть','Макс. Выходная Мощность', '44.4 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '85%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.6 A при 100-240V');
        create_product('GP-LS045P-36C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS45P.pdf','Источники питания','Источники питания','GP-LS045P-36C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','24-36V','Выходная сила тока', '1,25 A', 'PFC','Есть','Макс. Выходная Мощность', '45 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.6 A при 100-240V');
        create_product('GP-LS045P-42C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS45P.pdf','Источники питания','Источники питания','GP-LS045P-42C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '42V', 'Область постоянного тока','33-42V','Выходная сила тока', '1,05 A', 'PFC','Есть','Макс. Выходная Мощность', '44.1 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура', '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.6 A при 100-240V');
        create_product('GP-LS045P-48C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS45P.pdf','Источники питания','Источники питания','GP-LS045P-48C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','33-48V','Выходная сила тока', '1 A','PFC','Есть','Макс. Выходная Мощность',     '48 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.6 A при 100-240V');
        create_product('GP-LS045P-57C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS45P.pdf','Источники питания','Источники питания','GP-LS045P-57C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '57V', 'Область постоянного тока','40-57V','Выходная сила тока', '0,7 A', 'PFC','Есть','Макс. Выходная Мощность',  '40 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.6 A при 100-240V');

        //http://www.glacialpower.com/products/pdf/GP-LS60P.pdf
        create_product('GP-LS060P-12C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-12C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','9-12V','Выходная сила тока',  '4,2 A', 'PFC','Есть','Макс. Выходная Мощность', '50.4 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');
        create_product('GP-LS060P-24C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-24C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','16-24V','Выходная сила тока', '2,5 A', 'PFC','Есть','Макс. Выходная Мощность', '60 Вт', 'Гарантия', '2 года',   'Производитель', 'GalicialTech', 'КПД', '86%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');
        create_product('GP-LS060P-36C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-36C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','24-36V','Выходная сила тока', '1,65 A', 'PFC','Есть','Макс. Выходная Мощность','59.4 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');
        create_product('GP-LS060P-42C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-42C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '42V', 'Область постоянного тока','33-42V','Выходная сила тока', '1,4 A','PFC','Есть','Макс. Выходная Мощность',  '58.8 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');
        create_product('GP-LS060P-48C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-48C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','33-48V','Выходная сила тока', '1,2 A', 'PFC','Есть','Макс. Выходная Мощность', '57.6 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');
        create_product('GP-LS060P-57C(A)',$type,'http://www.glacialpower.com/products/pdf/GP-LS60P.pdf','Источники питания','Источники питания','GP-LS060P-57C(A)', array('http://www.glacialpower.com/products/images/GP-LS60P.jpg'),1,0, 'Выходное напряжение', '57V', 'Область постоянного тока','40-57V','Выходная сила тока', '1,05 A', 'PFC','Есть','Макс. Выходная Мощность','59.8 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','650 г','Размер','199.3x49.5x40.5мм','Входная сила тока','0.8 A при 100-240V');

        //http://www.glacialpower.com/products/pdf/GP-LS100P.pdf
        create_product('GP-LS100P-12',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-12', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','9-12V','Выходная сила тока',  '8,3 A', 'PFC','Есть','Макс. Выходная Мощность','99.6 Вт',  'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-15',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-15', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '15V', 'Область постоянного тока','10-15V','Выходная сила тока', '6,6 A', 'PFC','Есть','Макс. Выходная Мощность','99 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-24',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-24', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','14-24V','Выходная сила тока', '4,2 A', 'PFC','Есть','Макс. Выходная Мощность','100.8 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-30',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-30', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '30V', 'Область постоянного тока','22-30V','Выходная сила тока', '3,3 A', 'PFC','Есть','Макс. Выходная Мощность','99 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-36',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-36', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','26-36V','Выходная сила тока', '2,8 A', 'PFC','Есть','Макс. Выходная Мощность','100.8 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-48',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-48', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','34-48V','Выходная сила тока', '2,1 A', 'PFC','Есть','Макс. Выходная Мощность','100.8 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90.5%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');
        create_product('GP-LS100P-57',$type,'http://www.glacialpower.com/products/pdf/GP-LS100P.pdf','Источники питания','Источники питания','GP-LS100P-57', array('http://www.glacialpower.com/products/images/GP-LS100P(36).jpg'),1,0, 'Выходное напряжение', '57V', 'Область постоянного тока','43-57V','Выходная сила тока', '1,75 A','PFC','Есть','Макс. Выходная Мощность','99.7 Вт',  'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90.5%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','1,4 A при 115V / 0,6 А при 230V');

        //http://www.glacialpower.com/products/pdf/GP-LS150P.pdf
        create_product('GP-LS150P-12',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-12', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','9-12V','Выходная сила тока',  '11 A',  'PFC','Есть','Макс. Выходная Мощность','132 Вт',  'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм',  'Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-15',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-15', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '15V', 'Область постоянного тока','10-15V','Выходная сила тока', '10 A',  'PFC','Есть','Макс. Выходная Мощность','150 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '88%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-24',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-24', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','14-24V','Выходная сила тока', '6,3 A', 'PFC','Есть','Макс. Выходная Мощность','151.2 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм', 'Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-30',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-30', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '30V', 'Область постоянного тока','22-30V','Выходная сила тока', '5 A',   'PFC','Есть','Макс. Выходная Мощность','150 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм','Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-36',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-36', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','26-36V','Выходная сила тока', '4,2 A', 'PFC','Есть','Макс. Выходная Мощность','151.2 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм', 'Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-48',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-48', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','34-48V','Выходная сила тока', '3,2 A', 'PFC','Есть','Макс. Выходная Мощность','153.6 Вт', 'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм',   'Входная сила тока','2 A при 115V / 1 А при 230V');
        create_product('GP-LS150P-54',$type,'http://www.glacialpower.com/products/pdf/GP-LS150P.pdf','Источники питания','Источники питания','GP-LS100P-57', array('http://www.glacialpower.com/products/images/GP-LS150P(24).jpg'),1,0, 'Выходное напряжение', '54V', 'Область постоянного тока','38-54V','Выходная сила тока', '2,8 A', 'PFC','Есть','Макс. Выходная Мощность','151.2 Вт',  'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура', '-30 до 70°C', 'Степень защиты','IP67','Входное напряжение', '90-305V','Вес','940 г','Размер','222x68x39мм',  'Входная сила тока','2 A при 115V / 1 А при 230V');

        //http://www.glacialpower.com/products/pdf/GP-LS200P.pdf
        create_product('GP-LS200P-12',$type,'http://www.glacialpower.com/products/pdf/GP-LS200P.pdf','Источники питания','Источники питания','GP-LS100P-12', array('http://www.glacialpower.com/products/images/GP-LS200P(48).jpg'),1,0, 'Выходное напряжение', '12V', 'Область постоянного тока','9-12V','Выходная сила тока',  '13,4 A',  'PFC','Есть','Макс. Выходная Мощность','160,8 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '87%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','244x68x39мм',  'Входная сила тока','array(4 A при 115V / 2 )А при 230V');
        create_product('GP-LS200P-24',$type,'http://www.glacialpower.com/products/pdf/GP-LS200P.pdf','Источники питания','Источники питания','GP-LS100P-24', array('http://www.glacialpower.com/products/images/GP-LS200P(48).jpg'),1,0, 'Выходное напряжение', '24V', 'Область постоянного тока','16-24V','Выходная сила тока', '8,3 A',  'PFC','Есть','Макс. Выходная Мощность','199,2 Вт',     'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','244x68x39мм',  'Входная сила тока','array(4 A при 115V / 2 )А при 230V');
        create_product('GP-LS200P-36',$type,'http://www.glacialpower.com/products/pdf/GP-LS200P.pdf','Источники питания','Источники питания','GP-LS100P-36', array('http://www.glacialpower.com/products/images/GP-LS200P(48).jpg'),1,0, 'Выходное напряжение', '36V', 'Область постоянного тока','27-36V','Выходная сила тока', '5,6 A', 'PFC','Есть','Макс. Выходная Мощность','201,6 Вт',      'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','244x68x39мм',  'Входная сила тока','array(4 A при 115V / 2 )А при 230V');
        create_product('GP-LS200P-48',$type,'http://www.glacialpower.com/products/pdf/GP-LS200P.pdf','Источники питания','Источники питания','GP-LS100P-48', array('http://www.glacialpower.com/products/images/GP-LS200P(48).jpg'),1,0, 'Выходное напряжение', '48V', 'Область постоянного тока','37-48V','Выходная сила тока', '4,1 A',   'PFC','Есть','Макс. Выходная Мощность','196,8 Вт',    'Гарантия', '2 года', 'Производитель', 'GalicialTech', 'КПД', '90%', 'Рабочая температура',   '-30 до 50°C', 'Степень защиты','IP67','Входное напряжение', '100-277V','Вес','1100 г','Размер','244x68x39мм',  'Входная сила тока','4 A при 115V / 2 А при 230V');

        //end http://www.glacialpower.com/products/led-driver-PFC2.htm
    }
    function create_cat()
    {
        create_category('Кратность резки', 0, 'фильтрация товаров по кратности резки', 'Кратность резки,Electrovolt', 0);
        create_category('10 см (3 светодиода)', 'Кратность резки', 'фильтрация товаров по кратности резки', 'Кратность резки,Electrovolt', 0);
        create_category('5 см (3 светодиода)', 'Кратность резки', 'фильтрация товаров по кратности резки', 'Кратность резки,Electrovolt', 0);
        create_category('2,5 см (3 светодиода)', 'Кратность резки', 'фильтрация товаров по кратности резки', 'Кратность резки,Electrovolt', 0);

        create_category('Рабочая температура', 0, 'фильтрация товаров по рабочей температуре', 'Рабочая температура,Electrovolt', 0);
        create_category('-20 до 30°C', 'Рабочая температура', 'фильтрация товаров по рабочей температуре', 'Рабочая температура,Electrovolt', 0);
        create_category('-25 до 60°C', 'Рабочая температура', 'фильтрация товаров по рабочей температуре', 'Рабочая температура,Electrovolt', 0);
        create_category('-40 до 80°C', 'Рабочая температура', 'фильтрация товаров по рабочей температуре', 'Рабочая температура,Electrovolt', 0);

        create_category('Рабочий ток', 0, 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('0,2 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('0,4 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('0,6 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('0,8 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('1,2 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);
        create_category('1,6 А/метр', 'Рабочий ток', 'фильтрация товаров по рабочему току', 'Рабочий ток,Electrovolt', 0);

        create_category('Размер', 0, 'фильтрация товаров по размеру', 'Размер,Electrovolt', 0);
        create_category('5000х8х2,5мм', 'Размер', 'фильтрация товаров по размеру', 'Размер,Electrovolt', 0);
        create_category('5000х8х1,5мм', 'Размер', 'фильтрация товаров по размеру', 'Размер,Electrovolt', 0);
        create_category('5000х10х2,5мм', 'Размер', 'фильтрация товаров по размеру', 'Размер,Electrovolt', 0);

        create_category('Срок службы', 0, 'фильтрация товаров по сроку службы', 'Срок службы,Electrovolt', 0);
        create_category('30 000 часов', 'Срок службы', 'фильтрация товаров по сроку службы', 'Срок службы,Electrovolt', 0);
        create_category('50 000 часов', 'Срок службы', 'фильтрация товаров по сроку службы', 'Срок службы,Electrovolt', 0);

        create_category('Степень защиты', 0, 'фильтрация товаров по степени защиты', 'Степень защиты,Electrovolt', 0);
        create_category('IP33', 'Степень защиты', 'фильтрация товаров по степени защиты', 'Степень защиты,Electrovolt', 0);
        create_category('IP65', 'Степень защиты', 'фильтрация товаров по степени защиты', 'Степень защиты,Electrovolt', 0);
        create_category('IP67', 'Степень защиты', 'фильтрация товаров по степени защиты', 'Степень защиты,Electrovolt', 0);
        create_category('IP68', 'Степень защиты', 'фильтрация товаров по степени защиты', 'Степень защиты,Electrovolt', 0);

        create_category('Угол свечения', 0, 'фильтрация товаров по углу свечения', 'Угол свечения,Electrovolt', 0);
        create_category('120°', 'Угол свечения', 'фильтрация товаров по углу свечения', 'Угол свечения,Electrovolt', 0);

        create_category('Яркость на диод', 0, 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('5Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('6-7Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('8-10Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('10Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('18-20Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('20-22Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('22Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);
        create_category('50Lm', 'Яркость на диод', 'фильтрация товаров по яркости на диод', 'Яркость на диод,Electrovolt', 0);


        create_category('Цвет', 0, 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Холодно-белый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Нейтрально-белый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Белый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Тепло-белый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Желтый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Красный', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Зеленый', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('Синий', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);
        create_category('RGB', 'Цвет', 'фильтрация товаров по цвету', 'Цвет,Electrovolt', 0);

        create_category('Гарантия', 0, 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('1 месяц', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('3 месяца', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('6 месяцев', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('1 год', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('2 года', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('3 года', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);
        create_category('Без гарантии', 'Гарантия', 'фильтрация товаров по длительности гарантии', 'Гарантия,Electrovolt', 0);

        create_category('Тип светодиодов', 0, 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 2835', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 3014', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 335', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 3528', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 5050', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 5630', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);
        create_category('SMD 5730', 'Тип светодиодов', 'фильтрация товаров по типу светодиодов', 'Тип светодиодов,Electrovolt', 0);

        create_category('Производитель', 0, 'фильтрация товаров по производителю', 'Производитель,Electrovolt', 0);
        create_category('Venom', 'Производитель', 'фильтрация товаров по производителю', 'Venom,Electrovolt', 0);
        create_category('Samsung', 'Производитель', 'фильтрация товаров по производителю', 'Venom,Electrovolt', 0);

        create_category('Напряжение', 0, 'фильтрация товаров по напряжению', 'Напряжение,Electrovolt', 0);
        create_category('12V', 'Напряжение', 'фильтрация товаров по напряжению', 'Напряжение,Electrovolt', 0);
        create_category('24V', 'Напряжение', 'фильтрация товаров по напряжению', 'Напряжение,Electrovolt', 0);
        create_category('220V', 'Напряжение', 'фильтрация товаров по напряжению', 'Напряжение,Electrovolt', 0);

        create_category('Количество светодиодов', 0, 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('30 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('60 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('72 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('120 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('180 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);
        create_category('240 шт/метр', 'Количество светодиодов', 'фильтрация товаров по количеству светодиодов', 'Количество светодиодов,Electrovolt', 0);


        create_category('Мощность', 0, 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('4.8 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('6 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('7 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('7.2 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('9.6 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('12 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('14.4 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('19.2 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);
        create_category('24 Вт/метр', 'Мощность', 'фильтрация товаров по мощности', 'Мощность,Electrovolt', 0);

        create_category('Продукция', 0, 'Здесь находятся вся продукция производимая компанией Electrovolt', 'Продукция,Electrovolt', 0);
        create_category('Управляющие платы', 'Продукция', 'Управляющие платы производимые компанией Electrovolt', 'Управляющие платы,Electrovolt', 0);
        create_category('Для создания стробо-эффекта', 'Управляющие платы', 'Управляющие платы для стробоскопов производимые компанией Electrovolt', 'Управляющие платы,Стробскоп,стробо-эффект,Electrovolt', 0);
        create_category('Многоканальные', 'Управляющие платы', 'Многоканальные управляющие платы производимые компанией Electrovolt', 'Управляющие платы,многоканальные,Electrovolt', 0);
        create_category('Дизайнерские лампы', 'Продукция', 'Дизайнерские лампы производимые компанией Electrovolt', 'Дизайнерские лампы,лампы,Electrovolt', 0);
        create_category('Бегущие строки', 'Продукция', 'Бегущие строки производимые компанией Electrovolt', 'Бегущие строки,Electrovolt', 0);
        create_category('Электронные табло', 'Продукция', 'Электронные табло производимые компанией Electrovolt', 'Электронные таблоElectrovolt', 0);
        create_category('Медиа фассады', 'Продукция', 'Медиа фассады производимые компанией Electrovolt', 'Медиа фассады,Electrovolt', 0);
        create_category('RGB LED экраны', 'Продукция', 'RGB LED экраны производимые компанией Electrovolt', 'RGB LED экраны,Electrovolt', 0);
        create_category('Системы диммирования', 'Продукция', 'Системы диммирования производимые компанией Electrovolt', 'Системы диммирования,Electrovolt', 0);


        create_category('Товары', 0, 'Здесь находятся все товары предоставленные компанией Electrovolt', 'Товары,Electrovolt', 0);
        create_category('Модули', 'Товары', 'Модули предоставленные компанией Electrovolt', 'Модули,Electrovolt', 'Производители,Цвет,Напряжение,Мощность,Количество светодиодов,Тип светодиодов,Гарантия,Яркость на диод,Степень защиты,Срок службы,Кратность резки,Рабочий ток,Рабочая температура,Кратность резки,Размер,Угол свечения,Температура цвета,Количество программ,Граничное значение тока,Макс. подключаемых модулей,Рабочее напряжение,Выходная сила тока,Выходное напряжение,Макс. Выходная Мощнось,Входное напряжение,Яркость,Вес');
        create_category('Светодиоды', 'Товары', 'Светодиоды предоставленные компанией Electrovolt', 'Светодиоды,Electrovolt', 'Производители,Цвет,Напряжение,Мощность,Количество светодиодов,Тип светодиодов,Гарантия,Яркость на диод,Степень защиты,Срок службы,Кратность резки,Рабочий ток,Рабочая температура,Кратность резки,Размер,Угол свечения,Температура цвета,Количество программ,Граничное значение тока,Макс. подключаемых модулей,Рабочее напряжение,Выходная сила тока,Выходное напряжение,Макс. Выходная Мощнось,Входное напряжение,Яркость,Вес');
        create_category('Светодиодные ленты', 'Товары', 'Светодиодные ленты предоставленные компанией Electrovolt', 'Светодиодные ленты,Electrovolt', 'Производители,Цвет,Напряжение,Мощность,Количество светодиодов,Тип светодиодов,Гарантия,Яркость на диод,Степень защиты,Срок службы,Кратность резки,Рабочий ток,Рабочая температура,Кратность резки,Размер,Угол свечения');
        create_category('Источники питания', 'Товары', 'Источники питания предоставленные компанией Electrovolt', 'Источники питания,Electrovolt', 'Производители,Цвет,Напряжение,Мощность,Количество светодиодов,Тип светодиодов,Гарантия,Яркость на диод,Степень защиты,Срок службы,Кратность резки,Рабочий ток,Рабочая температура,Кратность резки,Размер,Угол свечения,Температура цвета,Количество программ,Граничное значение тока,Макс. подключаемых модулей,Рабочее напряжение,Выходная сила тока,Выходное напряжение,Макс. Выходная Мощнось,Входное напряжение,Яркость,Вес');
        create_category('Коробочки', 'Товары', 'Коробочки предоставленные компанией Electrovolt', 'Коробочки,Electrovolt', 'Размер');


        create_category('Проекты', 0, 'Здесь находятся все проекты запущенные компанией Electrovolt', 'Проекты,Проект,Electrovolt', 0);
        create_category('Вывески', 'Проекты', 'Вывески созданные Electrovolt', 'Вывески,Вывеска,Electrovolt', 0);
        create_category('Конструкции', 'Проекты', 'Конструкции созданные компанией Electrovolt', 'Конструкции,Конструкция,Electrovolt', 0);
        create_category('Террасы', 'Проекты', 'Террасы созданные компанией Electrovolt', 'Террасы,Терраса,Electrovolt', 0);
        create_category('Интерьер', 'Проекты', 'Интерьеры созданные компанией Electrovolt', 'Интерьеры,Интерьер,Electrovolt', 0);
    }
    function update_cat(){
        $categories=R::find('categories','id > ?',array(0));
        foreach ($categories as $category){
            if(strpos($category->name,',')!=false){
                $category->name=str_replace(',','.',$category->name);
                echo $category->name.'<br>';
                R::store($category);
            }
        }
    }



//create_cat();
//add_goq();
//add_projects();
//add_ledstorm();
//add_gp_1();
//add_gp_2();
//add_gp_3();
update_cat();
//create_product('Светодиодная лента Venom SMD 3528 60д.м. герметичная Premium',$type,$sub_type,'Светодиодные ленты','Светодиодные ленты','Светодиодная лента,Venom,SMD 3528,60д.м.,герметичная,Premium',array('product_19.jpeg'),65.5,0, 'Количество светодиодов', '30', 'Тип светодиодов', 'SMD 3528', $spec3_name, $spec3_value, $spec4_name, $spec4_value, $spec5_name, $spec5_value, $spec6_name, $spec6_value, $spec7_name, $spec7_value, $spec8_name, $spec8_value, $spec9_name, $spec9_value);


//add_category('Светодиодное освещение',0,'','');
	//add_category('Светодиодная лента',0,'','');
	//add_category('Светодиодные лампы',0,'','');
	//add_category('Светодиодные светильники',0,'','');
	//add_category('Светодиодная реклама',0,'','');
	//add_category('Источники питания',0,'','');

//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
//	add_product('Лампа','Светодиодные лампы','220v',3,'','','','/images/product1.png',200,0);
?>