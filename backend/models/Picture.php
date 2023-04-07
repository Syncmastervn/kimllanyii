<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

/**
 * This is the model class for table "picture".
 *
 * @property int $Id
 * @property int $ProductId
 * @property string $Image
 * @property string $Date
 */
class Picture extends \yii\db\ActiveRecord
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
            [['Image'], 'required'],
            [['ProductId'], 'integer'],
            [['Date'], 'safe'],
            [['Image'], 'string'],
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