<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\Products;
use app\modules\admin\models\Categories;
use app\modules\admin\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

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

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
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

        $model_categories = Categories::find()->where(['parent_name'=>['Товары','Продукция','Проекты']])->all();
        foreach ($model_categories as $value) {
            $arrCategories[$value->id]=$value->name;
        }

        $model_types = Categories::find()->where(['name'=>['Товары','Продукция','Проекты']])->all();
        foreach ($model_types as $value) {
            $arrType[$value->id]=$value->name;
        }

        $model_sub_types = Categories::find()->where(['parent_name'=>['Товары','Продукция','Проекты']])->Orwhere(['<>','parent_of_parent_id','0'])->all();
        foreach ($model_sub_types as $value) {
            $arrSubType[$value->id]=$value->name;
        }

        $model_specs = Categories::find()->where(['<>','name','Товары'])->andwhere(['<>','name','Продукция'])->andwhere(['<>','name','Проекты'])->andwhere(['<>','parent_name','Товары'])->andwhere(['<>','parent_name','Продукция'])->andwhere(['<>','parent_name','Проекты'])->andWhere(['=','parent_id','0'])->all();
        foreach ($model_specs as $value) {
            $arrSpecs[$value->id]=$value->name;
        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
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
    public function actionLists($id)
    {
        $count_specs = Categories::find()->where(['parent_id' => $id])->count();
        $model_specs = Categories::find()->where(['parent_id' => $id])->all();
        if($count_specs>0) {
            echo "<option>выбрать...</option>";
            foreach ($model_specs as $value) {
                echo "<option value='".$value->id."'>". $value->name."</option>";
            }
        }
        else{
            echo "<option> - </option>";
        }
    }
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
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
