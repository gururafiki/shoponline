<?php

namespace app\modules\adminpanel\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $parent_of_parent_id
 * @property string $parent_id
 * @property string $parent_name
 * @property string $name
 * @property string $specs
 * @property string $keywords
 * @property string $describtion
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_of_parent_id', 'parent_id'], 'integer'],
            [['specs'], 'string'],
            [['parent_name', 'name', 'keywords', 'describtion'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_of_parent_id' => 'Parent Of Parent ID',
            'parent_id' => 'Parent ID',
            'parent_name' => 'Parent Name',
            'name' => 'Name',
            'specs' => 'Specs',
            'keywords' => 'Keywords',
            'describtion' => 'Describtion',
        ];
    }

    public function getIdProducts()
    {
        return $this->hasMany(Products::className(),['category_id' => 'id']);
    }
    public function getIdCategories()
    {
        return $this->hasOne(Categories::className(),['id' => 'parent_id']);
    }
}
