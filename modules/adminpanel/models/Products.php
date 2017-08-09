<?php

namespace app\modules\adminpanel\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $category_id
 * @property string $category_name
 * @property string $type
 * @property string $sub_type
 * @property string $name
 * @property string $spec1_name
 * @property string $spec2_name
 * @property string $spec3_name
 * @property string $spec4_name
 * @property string $spec5_name
 * @property string $spec6_name
 * @property string $spec7_name
 * @property string $spec8_name
 * @property string $spec9_name
 * @property string $spec10_name
 * @property string $spec11_name
 * @property string $spec12_name
 * @property string $spec13_name
 * @property string $spec14_name
 * @property string $spec15_name
 * @property string $spec16_name
 * @property string $spec17_name
 * @property string $spec18_name
 * @property string $spec19_name
 * @property string $spec20_name
 * @property string $spec21_name
 * @property string $spec22_name
 * @property string $spec23_name
 * @property string $spec24_name
 * @property string $spec25_name
 * @property string $spec1_id
 * @property string $spec2_id
 * @property string $spec3_id
 * @property string $spec4_id
 * @property string $spec5_id
 * @property string $spec6_id
 * @property string $spec7_id
 * @property string $spec8_id
 * @property string $spec9_id
 * @property string $spec10_id
 * @property string $spec11_id
 * @property string $spec12_id
 * @property string $spec13_id
 * @property string $spec14_id
 * @property string $spec15_id
 * @property string $spec16_id
 * @property string $spec17_id
 * @property string $spec18_id
 * @property string $spec19_id
 * @property string $spec20_id
 * @property string $spec21_id
 * @property string $spec22_id
 * @property string $spec23_id
 * @property string $spec24_id
 * @property string $spec25_id
 * @property string $keywords
 * @property string $describtion
 * @property string $photo_1
 * @property string $photo_2
 * @property string $photo_3
 * @property string $photo_4
 * @property string $photo_5
 * @property string $photo_6
 * @property string $photo_8
 * @property string $photo_9
 * @property string $photo_10
 * @property string $price
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
            [['category_id', 'spec19_name', 'spec20_name', 'spec21_name', 'spec22_name', 'spec23_name', 'spec24_name', 'spec25_name', 'spec1_id', 'spec2_id', 'spec3_id', 'spec4_id', 'spec5_id', 'spec6_id', 'spec7_id', 'spec8_id', 'spec9_id', 'spec10_id', 'spec11_id', 'spec12_id', 'spec13_id', 'spec14_id', 'spec15_id', 'spec16_id', 'spec17_id', 'spec18_id', 'spec19_id', 'spec20_id', 'spec21_id', 'spec22_id', 'spec23_id', 'spec24_id', 'spec25_id', 'popularity'], 'integer'],
            [['describtion'], 'string'],
            [['category_name', 'type', 'sub_type', 'name', 'spec1_name', 'spec2_name', 'spec3_name', 'spec4_name', 'spec5_name', 'spec6_name', 'spec7_name', 'spec8_name', 'spec9_name', 'spec10_name', 'spec11_name', 'spec12_name', 'spec13_name', 'spec14_name', 'spec15_name', 'spec16_name', 'spec17_name', 'spec18_name', 'keywords', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'photo_6', 'photo_8', 'photo_9', 'photo_10', 'price'], 'string', 'max' => 191],
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
            'spec10_name' => 'Spec10 Name',
            'spec11_name' => 'Spec11 Name',
            'spec12_name' => 'Spec12 Name',
            'spec13_name' => 'Spec13 Name',
            'spec14_name' => 'Spec14 Name',
            'spec15_name' => 'Spec15 Name',
            'spec16_name' => 'Spec16 Name',
            'spec17_name' => 'Spec17 Name',
            'spec18_name' => 'Spec18 Name',
            'spec19_name' => 'Spec19 Name',
            'spec20_name' => 'Spec20 Name',
            'spec21_name' => 'Spec21 Name',
            'spec22_name' => 'Spec22 Name',
            'spec23_name' => 'Spec23 Name',
            'spec24_name' => 'Spec24 Name',
            'spec25_name' => 'Spec25 Name',
            'spec1_id' => 'Spec1 ID',
            'spec2_id' => 'Spec2 ID',
            'spec3_id' => 'Spec3 ID',
            'spec4_id' => 'Spec4 ID',
            'spec5_id' => 'Spec5 ID',
            'spec6_id' => 'Spec6 ID',
            'spec7_id' => 'Spec7 ID',
            'spec8_id' => 'Spec8 ID',
            'spec9_id' => 'Spec9 ID',
            'spec10_id' => 'Spec10 ID',
            'spec11_id' => 'Spec11 ID',
            'spec12_id' => 'Spec12 ID',
            'spec13_id' => 'Spec13 ID',
            'spec14_id' => 'Spec14 ID',
            'spec15_id' => 'Spec15 ID',
            'spec16_id' => 'Spec16 ID',
            'spec17_id' => 'Spec17 ID',
            'spec18_id' => 'Spec18 ID',
            'spec19_id' => 'Spec19 ID',
            'spec20_id' => 'Spec20 ID',
            'spec21_id' => 'Spec21 ID',
            'spec22_id' => 'Spec22 ID',
            'spec23_id' => 'Spec23 ID',
            'spec24_id' => 'Spec24 ID',
            'spec25_id' => 'Spec25 ID',
            'keywords' => 'Keywords',
            'describtion' => 'Describtion',
            'photo_1' => 'Photo 1',
            'photo_2' => 'Photo 2',
            'photo_3' => 'Photo 3',
            'photo_4' => 'Photo 4',
            'photo_5' => 'Photo 5',
            'photo_6' => 'Photo 6',
            'photo_8' => 'Photo 8',
            'photo_9' => 'Photo 9',
            'photo_10' => 'Photo 10',
            'price' => 'Price',
            'popularity' => 'Popularity',
        ];
    }

    public function getIdCategories()
    {
        return $this->hasOne(Categories::className(),['id' => 'category_id']);
    }
}
