<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $Id
 * @property string $Name
 * @property int $CategoryId
 * @property int $Price
 * @property int $Discount
 * @property int $PriceExtra
 * @property string $Images
 * @property string $Date
 * @property string $DateUpdate
 * @property int $Rank
 * @property int $UserId
 * @property string $Description
 * @property int $Status
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'CategoryId', 'UserId'], 'required'],
            [['CategoryId', 'Price', 'Discount', 'PriceExtra', 'Rank', 'UserId', 'Status'], 'integer'],
            [['Date', 'DateUpdate'], 'safe'],
            [['Name'], 'string', 'max' => 150],
            [['Images'], 'string', 'max' => 250],
            [['Description'], 'string', 'max' => 500],
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
            'CategoryId' => 'Category ID',
            'Price' => 'Price',
            'Discount' => 'Discount',
            'PriceExtra' => 'Price Extra',
            'Images' => 'Images',
            'Date' => 'Date',
            'DateUpdate' => 'Date Update',
            'Rank' => 'Rank',
            'UserId' => 'User ID',
            'Description' => 'Description',
            'Status' => 'Status',
        ];
    }
}
