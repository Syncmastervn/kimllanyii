<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product_group".
 *
 * @property int $Id
 * @property string $Name
 * @property string $Note
 * @property int $Rank
 * @property int $Status
 */
class ProductGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name', 'Note'], 'required'],
            [['Rank', 'Status'], 'integer'],
            [['Name'], 'string', 'max' => 80],
            [['Note'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'Name' => 'Tên nhóm',
            'Note' => 'Ghi chú',
            'Rank' => 'Cấp bậc',
            'Status' => 'Status',
        ];
    }
}
