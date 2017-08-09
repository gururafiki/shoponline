<?php

namespace app\controllers;
use app\models\Category;
use app\models\Product;
use Yii;
use yii\data\Pagination;

class AdminController extends AppController {
    public function actionIndex(){
        $query = Product::find();//->orderBy('price_sell');
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 100,'forcePageParam' => false,'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $name=Yii::$app->session->get('username');

        return $this->render('index',compact('pages','products','name'));
    }

    public function actionCreateTable(){
        return $this->render('createTable');
    }

    public function actionView($id,$byprice){
        $byprice = Yii::$app->request->get('byprice');
        $id = Yii::$app->request->get('id');

        if($byprice==1){
            $query =Product::find()->where(['category_id' => $id]);//->orderBy('price_sell');
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3,'forcePageParam' => false,'pageSizeParam' => false]);
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        else{
            $query = Product::find()->where(['category_id' => $id]);
            $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3,'forcePageParam' => false,'pageSizeParam' => false]);
            $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        }
        $button = '<div class="right">
                    <span>Сортировать по:</span><br>
                    <a href="/category/'.$id.'/0" title="" rel="nofollow">Популярности</a>         
                    <a href="/category/'.$id.'/1" title="" rel="nofollow">Цене</a>
                    <div class="clear"></div>
                </div>';
        $url = '/category/'.$col.'/'.$spo.'/'.$gen.'/'.$brand.'/'.$size.'/'.$type.'/'.$byprice;
        return $this->render('view',compact('pages','products','button','selected'));
    }

    public function actionSearch(){
        $q = Yii::$app->request->get('q');
        $query = Product::find()->where(['like','name',$q])->orwhere(['=','article',$q])->orwhere(['like','gender_name',$q])->orwhere(['like','col_name',$q])->orwhere(['=','brand',$q])->orwhere(['like','sport_name',$q])->orwhere(['like','type_name',$q])->orwhere(['=','sub_type_name',$q])->andwhere(['<>','photo_1', 'No photo yet'])->groupBy('photo_1');
        $pages= new Pagination(['totalCount' => $query->count(), 'pageSize' => 15,'forcePageParam' => false,'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        return $this->render('search',compact('products','pages','q'));
    }
}