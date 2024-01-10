<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product_infomations".
 *
 * @property int $Id
 * @property int $ProductId
 * @property int $UserId
 * @property string $Date
 * @property string $DateUpdate
 * @property string $Info_1
 * @property string $Info_2
 * @property string $Info_3
 * @property string $Info_4
 * @property string $Info_5
 * @property string $Info_6
 */
class ProductInfomations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_infomations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'UserId'], 'required'],
            [['ProductId', 'UserId'], 'integer'],
            [['Date', 'DateUpdate'], 'safe'],
            [['Info_1', 'Info_2', 'Info_3', 'Info_4', 'Info_5', 'Info_6'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'ProductId' => 'Product ID',
            'UserId' => 'User ID',
            'Date' => 'Date',
            'DateUpdate' => 'Date Update',
            'Info_1' => 'Info 1',
            'Info_2' => 'Info 2',
            'Info_3' => 'Info 3',
            'Info_4' => 'Info 4',
            'Info_5' => 'Info 5',
            'Info_6' => 'Info 6',
        ];
    }
}
