<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;
use yii\helpers\Url;

class CategoryController extends AppController {
    public function actionIndex(){
        $query = Product::find();//->orderBy('price_sell');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3,'forcePageParam' => false,'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $name=Yii::$app->session->get('username');

        $first=Product::find()->where(['category_name'=>'Источники питания'])->limit(4)->all();
        $second=Product::find()->where(['category_name'=>'Светодиодные ленты'])->limit(4)->all();
        $third =Product::find()->where(['category_name'=>'Светодиоды'])->limit(4)->all();
        $fourth=Product::find()->where(['category_name'=>'Модули'])->limit(4)->all();
        $fifth =Product::find()->where(['category_name'=>'Коробочки'])->limit(4)->all();
        return $this->render('search',compact('pages','products','name','first','second','third','fourth','fifth'));
    }

    public function actionCreateTable(){
        return $this->render('createTable');
    }

    public function actionView($id,$byprice_id){
        $byprice = Yii::$app->request->get('byprice_id');
        $id = Yii::$app->request->get('id');
        $i=1;
        while(!empty(Yii::$app->request->get('spec'.$i.'_id'))) {
            $specs[$i] = Yii::$app->request->get('spec'.$i);
            $specs_names[$i] = Yii::$app->request->get('spec'.$i.'_name');
            $specs_id[$i] = Yii::$app->request->get('spec'.$i.'_id');
            $i++;
        }
        $query =Product::find()->where(['category_id' => $id]);
        $spec_counter=1;
        $spec_str='<div><a class="btn btn-default waves-effect waves-light" style="margin-right: 0px;margin-top: 2px;width: 75%;text-overflow: ellipsis;" href="category/'.Yii::$app->request->get('category_parent').'/'.Yii::$app->request->get('category_name').'/'.Yii::$app->request->get('id').'/byprice/'.Yii::$app->request->get('byprice_name').'/'.Yii::$app->request->get('byprice_id').'" title="'.Category::findOne(['id' => Yii::$app->request->get('id')])->parent_name.':'.Category::findOne(['id' => Yii::$app->request->get('id')])->name.'" rel="nofollow">'.Category::findOne(['id' => Yii::$app->request->get('id')])->name.' ('.Category::findOne(['id' => Yii::$app->request->get('id')])->parent_name.')</a><a class="btn btn-danger waves-effect waves-light glyphicon glyphicon-remove del-item" style="margin-left: 0px;margin-top: 0px;width: 18%;" href="/" aria-hidden="true"></a></div>';
        if(!empty($specs_id))
            foreach ($specs_id as $spec){
                $buf_url=Url::to('');
                for($buf_counter=0;$buf_counter<5;$buf_counter++){
                    $buf_url=substr($buf_url,strpos($buf_url,'/')+1);
                }
                $spec_str.='<div><a class="btn btn-default waves-effect waves-light" style="text-overflow: ellipsis;margin-right: 0px;margin-top: 2px;width: 75%;" href="'.substr(Url::to(''),0,strpos(Url::to(''),$buf_url)-1).'/'.$specs[$spec_counter].'/'.$specs_names[$spec_counter].'/'.$specs_id[$spec_counter].'/byprice/'.Yii::$app->request->get('byprice_name').'/'.Yii::$app->request->get('byprice_id').'" title="'.Category::findOne(['id' => $specs_id[$spec_counter]])->parent_name.':'.Category::findOne(['id' => $specs_id[$spec_counter]])->name.'" rel="nofollow">'.Category::findOne(['id' => $specs_id[$spec_counter]])->name.' ('.Category::findOne(['id' => $specs_id[$spec_counter]])->parent_name.')</a><a class="btn btn-danger waves-effect waves-light glyphicon glyphicon-remove del-item" style="margin-left: 0px;margin-top: 0px;width: 18%;" href="'.substr(Url::to(''),0,strpos(Url::to(''),'/'.$specs[$spec_counter].'/'.$specs_names[$spec_counter].'/'.$specs_id[$spec_counter])).substr(Url::to(''),strpos(Url::to(''),'/'.$specs[$spec_counter].'/'.$specs_names[$spec_counter].'/'.$specs_id[$spec_counter])+strlen('/'.$specs[$spec_counter].'/'.$specs_names[$spec_counter].'/'.$specs_id[$spec_counter])).'" aria-hidden="true"></a></div>';
                $query=$query->andWhere('spec1_id ='.$spec . ' or spec2_id =' . $spec . ' or spec3_id =' . $spec . ' or spec4_id =' . $spec . ' or spec5_id =' . $spec . ' or spec6_id =' . $spec . ' or spec7_id =' . $spec . ' or spec8_id =' . $spec . ' or spec9_id =' . $spec . ' or spec10_id =' . $spec . ' or spec11_id =' . $spec . ' or spec12_id =' . $spec . ' or spec13_id =' . $spec . ' or spec14_id =' . $spec . ' or spec15_id =' . $spec . ' or spec16_id =' . $spec . ' or spec17_id =' . $spec . ' or spec18_id =' . $spec . ' or spec19_id =' . $spec . ' or spec20_id =' . $spec . ' or spec21_id =' . $spec . ' or spec22_id =' . $spec . ' or spec23_id =' . $spec . ' or spec24_id =' . $spec . ' or spec25_id =' . $spec);
                $spec_counter++;
            }
        if($byprice==1){//->orderBy('price_sell');
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12,'forcePageParam' => false,'pageSizeParam' => false]);
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        else{
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 12,'forcePageParam' => false,'pageSizeParam' => false]);
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        $first=Product::find()->where(['category_name'=>'Источники питания'])->limit(4)->all();
        $second=Product::find()->where(['category_name'=>'Светодиодные ленты'])->limit(4)->all();
        $third =Product::find()->where(['category_name'=>'Светодиоды'])->limit(4)->all();
        $fourth=Product::find()->where(['category_name'=>'Модули'])->limit(4)->all();
        $fifth =Product::find()->where(['category_name'=>'Коробочки'])->limit(4)->all();
        $button = '<div class="row">
                    <div class="col-md-7" >   
                    </div>
                    <div class="col-md-5" style="text-align: end;">
                     <div style="clear:both;"></div>
                     <div>
                     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" style=" margin-top: 20px;"><span style="width:100%;">Сортировать по:</span></div>
                     <br class="visible-xs">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-xs-7" style="padding:0;margin:0;">
                     <a class="btn btn-default waves-effect waves-light col-md-6" style="width: 100%;text-overflow: ellipsis;" href="'.substr(Url::to(''),0,strpos(Url::to(''),'/byprice')).'/byprice/po-popilarnosti/0" title="" rel="nofollow">Популярности</a>     
                     </div>
                     <div class="col-md-3 col-lg-3 col-sm-3 col-xs-5" style="padding:0;margin:0;">    
                     <a class="btn btn-danger waves-effect waves-light col-md-3" style="width: 80%;text-overflow: ellipsis;" href="'.substr(Url::to(''),0,strpos(Url::to(''),'/byprice')).'/byprice/po-cene/1" title="" rel="nofollow">Цене</a>
                     </div>
                     <div style="clear:both;"></div>
                    </div>
                   </div>';
        return $this->render('view',compact('spec_str','pages','products','button','first','second','third','fourth','fifth'));
    }

    public function actionSearch(){
        $search = Yii::$app->request->get('search');
        $query = Product::find()->where(['like','name',$search])->orwhere(['like','type',$search])->orwhere(['like','sub_type',$search])->orwhere(['=','id',$search])->orwhere(['like','keywords',$search])->orwhere(['like','describtion',$search]);
        $pages= new Pagination(['totalCount' => $query->count(), 'pageSize' => 15,'forcePageParam' => false,'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $first=Product::find()->where(['category_name'=>'Источники питания'])->limit(4)->all();
        $second=Product::find()->where(['category_name'=>'Светодиодные ленты'])->limit(4)->all();
        $third =Product::find()->where(['category_name'=>'Светодиоды'])->limit(4)->all();
        $fourth=Product::find()->where(['category_name'=>'Модули'])->limit(4)->all();
        $fifth =Product::find()->where(['category_name'=>'Коробочки'])->limit(4)->all();
        return $this->render('search',compact('products','pages','search','first','second','third','fourth','fifth'));
    }
}