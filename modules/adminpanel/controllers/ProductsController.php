<?php

namespace app\modules\adminpanel\controllers;

use Yii;
use app\modules\adminpanel\models\Products;
use app\modules\adminpanel\models\Categories;
use app\modules\adminpanel\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $products=Categories::findOne(['name'=>['Продукция']]);
        $projects=Categories::findOne(['name'=>['Проекты']]);
        $goods=Categories::findOne(['name'=>['Товары']]);
        $model_categories = Categories::find()->where(['parent_name'=>[$products->name,$projects->name,$goods->name]])->orwhere(['parent_of_parent_id'=>[$products->id,$projects->id,$goods->id]])->all();
        foreach ($model_categories as $value) {
            if(empty(Categories::findOne(['parent_id'=>[$value->id]])))
                $arrCategories[$value->id]=$value->name;
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrCategories' => $arrCategories,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();

        $products=Categories::findOne(['name'=>['Продукция']]);
        $projects=Categories::findOne(['name'=>['Проекты']]);
        $goods=Categories::findOne(['name'=>['Товары']]);
        $model_categories = Categories::find()->where(['parent_name'=>[$products->name,$projects->name,$goods->name]])->orwhere(['parent_of_parent_id'=>[$products->id,$projects->id,$goods->id]])->all();
        foreach ($model_categories as $value) {
            if(empty(Categories::findOne(['parent_id'=>[$value->id]])))
            $arrCategories[$value->id]=$value->name;
        }

        $model_specs = Categories::find()->where(['<>','name','Товары'])->andwhere(['<>','name','Продукция'])->andwhere(['<>','name','Проекты'])->andwhere(['<>','parent_name','Товары'])->andwhere(['<>','parent_name','Продукция'])->andwhere(['<>','parent_name','Проекты'])->andWhere(['=','parent_id','0'])->all();
        foreach ($model_specs as $value) {
            $arrSpecs[$value->id]=$value->name;
        }

        if ($model->load(Yii::$app->request->post()) ) {
            if($model->spec1_id!='') $model->spec1_name=Categories::findOne(['id'=>$model->spec1_name])->name;
            if($model->spec2_id!='') $model->spec2_name=Categories::findOne(['id'=>$model->spec2_name])->name;
            if($model->spec3_id!='') $model->spec3_name=Categories::findOne(['id'=>$model->spec3_name])->name;
            if($model->spec4_id!='') $model->spec4_name=Categories::findOne(['id'=>$model->spec4_name])->name;
            if($model->spec5_id!='') $model->spec5_name=Categories::findOne(['id'=>$model->spec5_name])->name;
            if($model->spec6_id!='') $model->spec6_name=Categories::findOne(['id'=>$model->spec6_name])->name;
            if($model->spec7_id!='') $model->spec7_name=Categories::findOne(['id'=>$model->spec7_name])->name;
            if($model->spec8_id!='') $model->spec8_name=Categories::findOne(['id'=>$model->spec8_name])->name;
            if($model->spec9_id!='') $model->spec9_name=Categories::findOne(['id'=>$model->spec9_name])->name;
            if($model->spec10_id!='') $model->spec10_name=Categories::findOne(['id'=>$model->spec10_name])->name;
            if($model->spec11_id!='') $model->spec11_name=Categories::findOne(['id'=>$model->spec11_name])->name;
            if($model->spec12_id!='') $model->spec12_name=Categories::findOne(['id'=>$model->spec12_name])->name;
            if($model->spec13_id!='') $model->spec13_name=Categories::findOne(['id'=>$model->spec13_name])->name;
            if($model->spec14_id!='') $model->spec14_name=Categories::findOne(['id'=>$model->spec14_name])->name;
            if($model->spec15_id!='') $model->spec15_name=Categories::findOne(['id'=>$model->spec15_name])->name;
            if($model->spec16_id!='') $model->spec16_name=Categories::findOne(['id'=>$model->spec16_name])->name;
            if($model->spec17_id!='') $model->spec17_name=Categories::findOne(['id'=>$model->spec17_name])->name;
            if($model->spec18_id!='') $model->spec18_name=Categories::findOne(['id'=>$model->spec18_name])->name;
            if($model->spec19_id!='') $model->spec19_name=Categories::findOne(['id'=>$model->spec19_name])->name;
            if($model->spec20_id!='') $model->spec20_name=Categories::findOne(['id'=>$model->spec20_name])->name;
            if($model->spec21_id!='') $model->spec21_name=Categories::findOne(['id'=>$model->spec21_name])->name;
            if($model->spec22_id!='') $model->spec22_name=Categories::findOne(['id'=>$model->spec22_name])->name;
            if($model->spec23_id!='') $model->spec23_name=Categories::findOne(['id'=>$model->spec23_name])->name;
            if($model->spec24_id!='') $model->spec24_name=Categories::findOne(['id'=>$model->spec24_name])->name;
            if($model->spec25_id!='') $model->spec25_name=Categories::findOne(['id'=>$model->spec25_name])->name;

            $model->save();
            $category=Categories::findOne(['id'=>$model->category_id]);
            $model->category_name=$category->name;
            $model->save();
            $productId=$model->id;
            if(UploadedFile::getInstance($model,'photo_1')){
                $image=UploadedFile::getInstance($model,'photo_1');
                $imgName= 'product_'.$productId.'_1.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_1=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_2')){
                $image=UploadedFile::getInstance($model,'photo_2');
                $imgName= 'product_'.$productId.'_2.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_2=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_3')){
                $image=UploadedFile::getInstance($model,'photo_3');
                $imgName= 'product_'.$productId.'_3.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_3=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_4')){
                $image=UploadedFile::getInstance($model,'photo_4');
                $imgName= 'product_'.$productId.'_4.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_4=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_5')){
                $image=UploadedFile::getInstance($model,'photo_5');
                $imgName= 'product_'.$productId.'_5.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_5=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_6')){
                $image=UploadedFile::getInstance($model,'photo_6');
                $imgName= 'product_'.$productId.'_6.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_6=$imgName;
            }
            if(UploadedFile::getInstance($model,'photo_8')){
                $image=UploadedFile::getInstance($model,'photo_8');
                $imgName= 'product_'.$productId.'_8.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_8=$imgName;
            }

            if(UploadedFile::getInstance($model,'photo_9')){
                $image=UploadedFile::getInstance($model,'photo_9');
                $imgName= 'product_'.$productId.'_9.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_9=$imgName;
            }
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrCategories' => $arrCategories,
                'arrSpecs' => $arrSpecs,
                'arrSpecsId' => [],
            ]);
        }
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $products=Categories::findOne(['name'=>['Продукция']]);
        $projects=Categories::findOne(['name'=>['Проекты']]);
        $goods=Categories::findOne(['name'=>['Товары']]);
        $model_categories = Categories::find()->where(['parent_name'=>[$products->name,$projects->name,$goods->name]])->orwhere(['parent_of_parent_id'=>[$products->id,$projects->id,$goods->id]])->all();
        foreach ($model_categories as $value) {
            if(empty(Categories::findOne(['parent_id'=>[$value->id]])))
                $arrCategories[$value->id]=$value->name;
        }

        $model_specs = Categories::find()->where(['<>','name','Товары'])->andwhere(['<>','name','Продукция'])->andwhere(['<>','name','Проекты'])->andwhere(['<>','parent_name','Товары'])->andwhere(['<>','parent_name','Продукция'])->andwhere(['<>','parent_name','Проекты'])->andWhere(['=','parent_id','0'])->all();
        foreach ($model_specs as $value) {
            $arrSpecs[$value->id]=$value->name;
        }

        if ($model->load(Yii::$app->request->post()) ) {
            $old_model=$this->findModel($id);
            if($model->spec1_id==''){
                $model->spec1_name=$old_model->spec1_name;
                $model->spec1_id=$old_model->spec1_id;
            }
            else $model->spec1_name=Categories::findOne(['id'=>$model->spec1_name])->name;

            if($model->spec2_id==''){
                $model->spec2_name=$old_model->spec2_name;
                $model->spec2_id=$old_model->spec2_id;
            }
            else $model->spec2_name=Categories::findOne(['id'=>$model->spec2_name])->name;

            if($model->spec3_id==''){
                $model->spec3_name=$old_model->spec3_name;
                $model->spec3_id=$old_model->spec3_id;
            }
            else $model->spec3_name=Categories::findOne(['id'=>$model->spec3_name])->name;

            if($model->spec4_id==''){
                $model->spec4_name=$old_model->spec4_name;
                $model->spec4_id=$old_model->spec4_id;
            }
            else $model->spec4_name=Categories::findOne(['id'=>$model->spec4_name])->name;

            if($model->spec5_id==''){
                $model->spec5_name=$old_model->spec5_name;
                $model->spec5_id=$old_model->spec5_id;
            }
            else $model->spec5_name=Categories::findOne(['id'=>$model->spec5_name])->name;

            if($model->spec6_id==''){
                $model->spec6_name=$old_model->spec6_name;
                $model->spec6_id=$old_model->spec6_id;
            }
            else $model->spec6_name=Categories::findOne(['id'=>$model->spec6_name])->name;

            if($model->spec7_id==''){
                $model->spec7_name=$old_model->spec7_name;
                $model->spec7_id=$old_model->spec7_id;
            }
            else $model->spec7_name=Categories::findOne(['id'=>$model->spec7_name])->name;

            if($model->spec8_id==''){
                $model->spec8_name=$old_model->spec8_name;
                $model->spec8_id=$old_model->spec8_id;
            }
            else $model->spec8_name=Categories::findOne(['id'=>$model->spec8_name])->name;

            if($model->spec9_id==''){
                $model->spec9_name=$old_model->spec9_name;
                $model->spec9_id=$old_model->spec9_id;
            }
            else $model->spec9_name=Categories::findOne(['id'=>$model->spec9_name])->name;

            if($model->spec10_id==''){
                $model->spec10_name=$old_model->spec10_name;
                $model->spec10_id=$old_model->spec10_id;
            }
            else $model->spec10_name=Categories::findOne(['id'=>$model->spec10_name])->name;

            if($model->spec11_id==''){
                $model->spec11_name=$old_model->spec11_name;
                $model->spec11_id=$old_model->spec11_id;
            }
            else $model->spec11_name=Categories::findOne(['id'=>$model->spec11_name])->name;

            if($model->spec12_id==''){
                $model->spec12_name=$old_model->spec12_name;
                $model->spec12_id=$old_model->spec12_id;
            }
            else $model->spec12_name=Categories::findOne(['id'=>$model->spec12_name])->name;

            if($model->spec13_id==''){
                $model->spec13_name=$old_model->spec13_name;
                $model->spec13_id=$old_model->spec13_id;
            }
            else $model->spec13_name=Categories::findOne(['id'=>$model->spec13_name])->name;

            if($model->spec14_id==''){
                $model->spec14_name=$old_model->spec14_name;
                $model->spec14_id=$old_model->spec14_id;
            }
            else $model->spec14_name=Categories::findOne(['id'=>$model->spec14_name])->name;

            if($model->spec15_id==''){
                $model->spec15_name=$old_model->spec15_name;
                $model->spec15_id=$old_model->spec15_id;
            }
            else $model->spec15_name=Categories::findOne(['id'=>$model->spec15_name])->name;

            if($model->spec16_id==''){
                $model->spec16_name=$old_model->spec16_name;
                $model->spec16_id=$old_model->spec16_id;
            }
            else $model->spec16_name=Categories::findOne(['id'=>$model->spec16_name])->name;

            if($model->spec17_id==''){
                $model->spec17_name=$old_model->spec17_name;
                $model->spec17_id=$old_model->spec17_id;
            }
            else $model->spec17_name=Categories::findOne(['id'=>$model->spec17_name])->name;

            if($model->spec18_id==''){
                $model->spec18_name=$old_model->spec18_name;
                $model->spec18_id=$old_model->spec18_id;
            }
            else $model->spec18_name=Categories::findOne(['id'=>$model->spec18_name])->name;

            if($model->spec19_id==''){
                $model->spec19_name=$old_model->spec19_name;
                $model->spec19_id=$old_model->spec19_id;
            }
            else $model->spec19_name=Categories::findOne(['id'=>$model->spec19_name])->name;

            if($model->spec20_id==''){
                $model->spec20_name=$old_model->spec20_name;
                $model->spec20_id=$old_model->spec20_id;
            }
            else $model->spec20_name=Categories::findOne(['id'=>$model->spec20_name])->name;

            if($model->spec21_id==''){
                $model->spec21_name=$old_model->spec21_name;
                $model->spec21_id=$old_model->spec21_id;
            }
            else $model->spec21_name=Categories::findOne(['id'=>$model->spec21_name])->name;

            if($model->spec22_id==''){
                $model->spec22_name=$old_model->spec22_name;
                $model->spec22_id=$old_model->spec22_id;
            }
            else $model->spec22_name=Categories::findOne(['id'=>$model->spec22_name])->name;

            if($model->spec23_id==''){
                $model->spec23_name=$old_model->spec23_name;
                $model->spec23_id=$old_model->spec23_id;
            }
            else $model->spec23_name=Categories::findOne(['id'=>$model->spec23_name])->name;

            if($model->spec24_id==''){
                $model->spec24_name=$old_model->spec24_name;
                $model->spec24_id=$old_model->spec24_id;
            }
            else $model->spec24_name=Categories::findOne(['id'=>$model->spec24_name])->name;

            if($model->spec25_id==''){
                $model->spec25_name=$old_model->spec25_name;
                $model->spec25_id=$old_model->spec25_id;
            }
            else $model->spec25_name=Categories::findOne(['id'=>$model->spec25_name])->name;


            $model->save();
            $category=Categories::findOne(['id'=>$model->category_id]);
            $model->category_name=$category->name;
            $productId=$model->id;
            if(UploadedFile::getInstance($model,'photo_1')){
                $image=UploadedFile::getInstance($model,'photo_1');
                $imgName= 'product_'.$productId.'_1.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_1=$imgName;
            }
            else $model->photo_1=$old_model->photo_1;

            if(UploadedFile::getInstance($model,'photo_2')){
                $image=UploadedFile::getInstance($model,'photo_2');
                $imgName= 'product_'.$productId.'_2.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_2=$imgName;
            }
            else $model->photo_2=$old_model->photo_2;

            if(UploadedFile::getInstance($model,'photo_3')){
                $image=UploadedFile::getInstance($model,'photo_3');
                $imgName= 'product_'.$productId.'_3.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_3=$imgName;
            }
            else $model->photo_3=$old_model->photo_3;

            if(UploadedFile::getInstance($model,'photo_4')){
                $image=UploadedFile::getInstance($model,'photo_4');
                $imgName= 'product_'.$productId.'_4.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_4=$imgName;
            }
            else $model->photo_4=$old_model->photo_4;

            if(UploadedFile::getInstance($model,'photo_5')){
                $image=UploadedFile::getInstance($model,'photo_5');
                $imgName= 'product_'.$productId.'_5.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_5=$imgName;
            }
            else $model->photo_5=$old_model->photo_5;

            if(UploadedFile::getInstance($model,'photo_6')){
                $image=UploadedFile::getInstance($model,'photo_6');
                $imgName= 'product_'.$productId.'_6.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_6=$imgName;
            }
            else $model->photo_6=$old_model->photo_6;

            if(UploadedFile::getInstance($model,'photo_8')){
                $image=UploadedFile::getInstance($model,'photo_8');
                $imgName= 'product_'.$productId.'_8.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_8=$imgName;
            }
            else $model->photo_8=$old_model->photo_8;

            if(UploadedFile::getInstance($model,'photo_9')){
                $image=UploadedFile::getInstance($model,'photo_9');
                $imgName= 'product_'.$productId.'_9.'.$image->getExtension();
                $image->saveAs(Yii::getAlias('@productImgPath').'/'.$imgName);
                $model->photo_9=$imgName;
            }
            else $model->photo_9=$old_model->photo_9;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'arrCategories' => $arrCategories,
                'arrSpecs' => $arrSpecs,
                'arrSpecsId' => [],
            ]);
        }
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
