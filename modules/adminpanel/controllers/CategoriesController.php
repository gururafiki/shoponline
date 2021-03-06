<?php

namespace app\modules\adminpanel\controllers;

use Yii;
use app\modules\adminpanel\models\Categories;
use app\modules\adminpanel\models\Products;
use app\modules\adminpanel\models\CategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CategoriesController implements the CRUD actions for Categories model.
 */
class CategoriesController extends Controller
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
     * Lists all Categories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $model_categories = Categories::find()->where(['=','parent_id',0])->orwhere(['=','parent_of_parent_id',0])->all();
        foreach ($model_categories as $value) {
            if(!empty(Categories::find()->where(['=','parent_id',$value->id])->all()))
                $arrCategories[$value->id]=$value->name;
        }

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'arrCategories' => $arrCategories,
        ]);
    }

    /**
     * Displays a single Categories model.
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
     * Creates a new Categories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Categories();

        $model_categories = Categories::find()->where(['parent_id'=>'0'])->orWhere(['parent_of_parent_id'=>'0'])->all();
        foreach ($model_categories as $value) {
            if(!empty(Categories::find()->where(['=','parent_id',$value->id])->all()))
                $arrCategories[$value->id]=$value->name;
        }

        if ($model->load(Yii::$app->request->post()) ) {
            $model->save();
            $parent=Categories::findOne(['id'=>$model->parent_id]);
            $model->parent_name=$parent->name;
            $model->parent_of_parent_id=$parent->parent_id;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'arrCategories' => $arrCategories,
            ]);
        }
    }

    /**
     * Updates an existing Categories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $model_categories = Categories::find()->where(['parent_id'=>'0'])->orWhere(['parent_of_parent_id'=>'0'])->all();
        foreach ($model_categories as $value) {
            if(!empty(Categories::find()->where(['=','parent_id',$value->id])->all()))
                $arrCategories[$value->id]=$value->name;
        }
        if ($model->load(Yii::$app->request->post()) ) {
            $model->save();
            $parent=Categories::findOne(['id'=>$model->parent_id]);
            $model->parent_name=$parent->name;
            $model->parent_of_parent_id=$parent->parent_id;
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
                'arrCategories' => $arrCategories,
            ]);
        }
    }

    /**
     * Deletes an existing Categories model.
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
     * Finds the Categories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return Categories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
