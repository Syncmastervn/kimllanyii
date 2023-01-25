<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "authority".
 *
 * @property int $Id
 * @property string $Name
 * @property string $Description
 * @property int $Rank
 * @property int $Status
 */
class Authority extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'authority';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Rank', 'Status'], 'integer'],
            [['Name'], 'string', 'max' => 50],
            [['Description'], 'string', 'max' => 200],
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
            'Description' => 'Description',
            'Rank' => 'Rank',
            'Status' => 'Status',
        ];
    }
}
