<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pictures".
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $Image
 * @property string $Date
 */
class Pictures extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pictures';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductId', 'Image'], 'required'],
            [['ProductId'], 'integer'],
            [['Date'], 'safe'],
            [['Image'], 'file', 'extensions' => 'png,jpg,gif','maxFiles'=>5,'skipOnEmpty'=>false],
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
            'Image' => 'Image',
            'Date' => 'Date',
        ];
    }
}
