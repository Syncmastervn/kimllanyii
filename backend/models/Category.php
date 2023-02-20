<?php

namespace backend\models;

//use Yii;
use yii\base\Model;
/**
 * This is the model class for table "category".
 *
 * @property int $Id
 * @property string $Name
 * @property int $Price
 * @property string $Description
 * @property string $Date
 * @property int $Status
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'category';
    }
    

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Price'], 'required'],
            [['Price', 'Status'], 'integer'],
            [['Date'], 'safe'],
            [['Name'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Name',
            'Price' => 'Price',
            'Description' => 'Description',
            'Date' => 'Date',
            'Status' => 'Status',
        ];
    }
}
