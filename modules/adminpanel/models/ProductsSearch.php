<?php

namespace app\modules\adminpanel\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\adminpanel\models\Products;

/**
 * ProductsSearch represents the model behind the search form about `app\modules\adminpanel\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'category_id', 'spec19_name', 'spec20_name', 'spec21_name', 'spec22_name', 'spec23_name', 'spec24_name', 'spec25_name', 'spec1_id', 'spec2_id', 'spec3_id', 'spec4_id', 'spec5_id', 'spec6_id', 'spec7_id', 'spec8_id', 'spec9_id', 'spec10_id', 'spec11_id', 'spec12_id', 'spec13_id', 'spec14_id', 'spec15_id', 'spec16_id', 'spec17_id', 'spec18_id', 'spec19_id', 'spec20_id', 'spec21_id', 'spec22_id', 'spec23_id', 'spec24_id', 'spec25_id', 'popularity'], 'integer'],
            [['category_name', 'type', 'sub_type', 'name', 'spec1_name', 'spec2_name', 'spec3_name', 'spec4_name', 'spec5_name', 'spec6_name', 'spec7_name', 'spec8_name', 'spec9_name', 'spec10_name', 'spec11_name', 'spec12_name', 'spec13_name', 'spec14_name', 'spec15_name', 'spec16_name', 'spec17_name', 'spec18_name', 'keywords', 'describtion', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_8', 'photo_9', 'photo_10', 'price'], 'safe'],
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
            'spec19_name' => $this->spec19_name,
            'spec20_name' => $this->spec20_name,
            'spec21_name' => $this->spec21_name,
            'spec22_name' => $this->spec22_name,
            'spec23_name' => $this->spec23_name,
            'spec24_name' => $this->spec24_name,
            'spec25_name' => $this->spec25_name,
            'spec1_id' => $this->spec1_id,
            'spec2_id' => $this->spec2_id,
            'spec3_id' => $this->spec3_id,
            'spec4_id' => $this->spec4_id,
            'spec5_id' => $this->spec5_id,
            'spec6_id' => $this->spec6_id,
            'spec7_id' => $this->spec7_id,
            'spec8_id' => $this->spec8_id,
            'spec9_id' => $this->spec9_id,
            'spec10_id' => $this->spec10_id,
            'spec11_id' => $this->spec11_id,
            'spec12_id' => $this->spec12_id,
            'spec13_id' => $this->spec13_id,
            'spec14_id' => $this->spec14_id,
            'spec15_id' => $this->spec15_id,
            'spec16_id' => $this->spec16_id,
            'spec17_id' => $this->spec17_id,
            'spec18_id' => $this->spec18_id,
            'spec19_id' => $this->spec19_id,
            'spec20_id' => $this->spec20_id,
            'spec21_id' => $this->spec21_id,
            'spec22_id' => $this->spec22_id,
            'spec23_id' => $this->spec23_id,
            'spec24_id' => $this->spec24_id,
            'spec25_id' => $this->spec25_id,
            'popularity' => $this->popularity,
        ]);

        $query->andFilterWhere(['like', 'category_name', $this->category_name])
            ->andFilterWhere(['like', 'type', $this->type])
            ->andFilterWhere(['like', 'sub_type', $this->sub_type])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'spec1_name', $this->spec1_name])
            ->andFilterWhere(['like', 'spec2_name', $this->spec2_name])
            ->andFilterWhere(['like', 'spec3_name', $this->spec3_name])
            ->andFilterWhere(['like', 'spec4_name', $this->spec4_name])
            ->andFilterWhere(['like', 'spec5_name', $this->spec5_name])
            ->andFilterWhere(['like', 'spec6_name', $this->spec6_name])
            ->andFilterWhere(['like', 'spec7_name', $this->spec7_name])
            ->andFilterWhere(['like', 'spec8_name', $this->spec8_name])
            ->andFilterWhere(['like', 'spec9_name', $this->spec9_name])
            ->andFilterWhere(['like', 'spec10_name', $this->spec10_name])
            ->andFilterWhere(['like', 'spec11_name', $this->spec11_name])
            ->andFilterWhere(['like', 'spec12_name', $this->spec12_name])
            ->andFilterWhere(['like', 'spec13_name', $this->spec13_name])
            ->andFilterWhere(['like', 'spec14_name', $this->spec14_name])
            ->andFilterWhere(['like', 'spec15_name', $this->spec15_name])
            ->andFilterWhere(['like', 'spec16_name', $this->spec16_name])
            ->andFilterWhere(['like', 'spec17_name', $this->spec17_name])
            ->andFilterWhere(['like', 'spec18_name', $this->spec18_name])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'describtion', $this->describtion])
            ->andFilterWhere(['like', 'photo_1', $this->photo_1])
            ->andFilterWhere(['like', 'photo_2', $this->photo_2])
            ->andFilterWhere(['like', 'photo_3', $this->photo_3])
            ->andFilterWhere(['like', 'photo_4', $this->photo_4])
            ->andFilterWhere(['like', 'photo_5', $this->photo_5])
            ->andFilterWhere(['like', 'photo_6', $this->photo_6])
            ->andFilterWhere(['like', 'photo_8', $this->photo_8])
            ->andFilterWhere(['like', 'photo_9', $this->photo_9])
            ->andFilterWhere(['like', 'photo_10', $this->photo_10])
            ->andFilterWhere(['like', 'price', $this->price]);

        return $dataProvider;
    }
}
