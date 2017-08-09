<?php

namespace app\modules\backend\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property string $id
 * @property string $parent_id
 * @property string $name
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
            [['parent_id'], 'integer'],
            [['name', 'keywords', 'describtion'], 'string', 'max' => 191],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => 'Parent ID',
            'name' => 'Name',
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
