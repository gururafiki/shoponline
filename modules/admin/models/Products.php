<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $category_id
 * @property string $category_name
 * @property integer $type
 * @property integer $sub_type
 * @property string $name
 * @property string $spec1_name
 * @property string $spec2_name
 * @property integer $spec3_name
 * @property integer $spec4_name
 * @property integer $spec5_name
 * @property integer $spec6_name
 * @property integer $spec7_name
 * @property integer $spec8_name
 * @property integer $spec9_name
 * @property string $spec1_id
 * @property string $spec2_id
 * @property string $spec3_id
 * @property string $spec4_id
 * @property string $spec5_id
 * @property string $spec6_id
 * @property string $spec7_id
 * @property string $spec8_id
 * @property string $spec9_id
 * @property string $keywords
 * @property string $describtion
 * @property string $photo
 * @property double $price
 * @property string $popularity
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'type', 'sub_type', 'spec3_name', 'spec4_name', 'spec5_name', 'spec6_name', 'spec7_name', 'spec8_name', 'spec9_name', 'spec1_id', 'spec2_id', 'spec3_id', 'spec4_id', 'spec5_id', 'spec6_id', 'spec7_id', 'spec8_id', 'spec9_id', 'popularity'], 'integer'],
            [['price'], 'number'],
            [['category_name', 'name', 'spec1_name', 'spec2_name', 'keywords', 'describtion', 'photo'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'category_name' => 'Category Name',
            'type' => 'Type',
            'sub_type' => 'Sub Type',
            'name' => 'Name',
            'spec1_name' => 'Spec1 Name',
            'spec2_name' => 'Spec2 Name',
            'spec3_name' => 'Spec3 Name',
            'spec4_name' => 'Spec4 Name',
            'spec5_name' => 'Spec5 Name',
            'spec6_name' => 'Spec6 Name',
            'spec7_name' => 'Spec7 Name',
            'spec8_name' => 'Spec8 Name',
            'spec9_name' => 'Spec9 Name',
            'spec1_id' => 'Spec1 ID',
            'spec2_id' => 'Spec2 ID',
            'spec3_id' => 'Spec3 ID',
            'spec4_id' => 'Spec4 ID',
            'spec5_id' => 'Spec5 ID',
            'spec6_id' => 'Spec6 ID',
            'spec7_id' => 'Spec7 ID',
            'spec8_id' => 'Spec8 ID',
            'spec9_id' => 'Spec9 ID',
            'keywords' => 'Keywords',
            'describtion' => 'Describtion',
            'photo' => 'Photo',
            'price' => 'Price',
            'popularity' => 'Popularity',
        ];
    }
    public function getIdCategories()
    {
        return $this->hasOne(Categories::className(),['id' => 'category_id']);
    }
}
