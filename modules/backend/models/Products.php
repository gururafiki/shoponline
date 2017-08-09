<?php

namespace app\modules\backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property string $category_id
 * @property string $type
 * @property string $sub_type
 * @property string $name
 * @property string $specs
 * @property string $keywords
 * @property string $describtion
 * @property string $photo
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
            [['category_id', 'price', 'popularity'], 'integer'],
            [['type', 'sub_type', 'name', 'specs', 'keywords', 'describtion', 'photo'], 'string', 'max' => 191],
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
            'type' => 'Type',
            'sub_type' => 'Sub Type',
            'name' => 'Name',
            'specs' => 'Specs',
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
