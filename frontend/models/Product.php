<?php

namespace frontend\models;

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
 * @property int $GroupId
 * @property string $Date
 * @property string $DateUpdate
 * @property int $Rank
 * @property int $UserId
 * @property string $Description
 * @property string $Tags
 * @property int $Interaction
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
            [['Name', 'CategoryId', 'GroupId', 'UserId'], 'required'],
            [['CategoryId', 'Price', 'Discount', 'PriceExtra', 'GroupId', 'Rank', 'UserId', 'Interaction', 'Status'], 'integer'],
            [['Date', 'DateUpdate'], 'safe'],
            [['Description'], 'string'],
            [['Name', 'Tags'], 'string', 'max' => 150],
            [['Images'], 'string', 'max' => 100],
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
            'GroupId' => 'Group ID',
            'Date' => 'Date',
            'DateUpdate' => 'Date Update',
            'Rank' => 'Rank',
            'UserId' => 'User ID',
            'Description' => 'Description',
            'Tags' => 'Tags',
            'Interaction' => 'Interaction',
            'Status' => 'Status',
        ];
    }
}
