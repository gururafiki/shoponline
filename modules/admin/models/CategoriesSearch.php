<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Categories;

/**
 * CategoriesSearch represents the model behind the search form about `app\modules\admin\models\Categories`.
 */
class CategoriesSearch extends Categories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_of_parent_id', 'parent_id'], 'integer'],
            [['parent_name', 'name', 'specs', 'keywords', 'describtion'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Categories::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'parent_of_parent_id' => $this->parent_of_parent_id,
            'parent_id' => $this->parent_id,
        ]);

        $query->andFilterWhere(['like', 'parent_name', $this->parent_name])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'specs', $this->specs])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'describtion', $this->describtion]);

        return $dataProvider;
    }
}
