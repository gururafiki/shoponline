<?php

namespace app\modules\admin\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\modules\admin\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'type', 'sub_type', 'spec3_name', 'spec4_name', 'spec5_name', 'spec6_name', 'spec7_name', 'spec8_name', 'spec9_name', 'spec1_id', 'spec2_id', 'spec3_id', 'spec4_id', 'spec5_id', 'spec6_id', 'spec7_id', 'spec8_id', 'spec9_id', 'popularity'], 'integer'],
            [['category_name', 'name', 'spec1_name', 'spec2_name', 'keywords', 'describtion', 'photo'], 'safe'],
            [['price'], 'number'],
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
        $query = Products::find();

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
            'category_id' => $this->category_id,
            'type' => $this->type,
            'sub_type' => $this->sub_type,
            'spec3_name' => $this->spec3_name,
            'spec4_name' => $this->spec4_name,
            'spec5_name' => $this->spec5_name,
            'spec6_name' => $this->spec6_name,
            'spec7_name' => $this->spec7_name,
            'spec8_name' => $this->spec8_name,
            'spec9_name' => $this->spec9_name,
            'spec1_id' => $this->spec1_id,
            'spec2_id' => $this->spec2_id,
            'spec3_id' => $this->spec3_id,
            'spec4_id' => $this->spec4_id,
            'spec5_id' => $this->spec5_id,
            'spec6_id' => $this->spec6_id,
            'spec7_id' => $this->spec7_id,
            'spec8_id' => $this->spec8_id,
            'spec9_id' => $this->spec9_id,
            'price' => $this->price,
            'popularity' => $this->popularity,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_name])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'spec1_name', $this->spec1_name])
            ->andFilterWhere(['like', 'spec2_name', $this->spec2_name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'describtion', $this->describtion])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}
