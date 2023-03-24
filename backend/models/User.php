<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $Id
 * @property int $AuthId
 * @property string $UserName
 * @property string $Phone
 * @property string $Password
 * @property string $FullName
 * @property string $Address
 * @property string $CitizenId
 * @property string $Email
 * @property string $SocialNet
 * @property string $Images
 * @property string $Notes
 * @property int $Rank
 * @property int $Status
 * @property string $Date
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AuthId', 'UserName', 'Password', 'FullName', 'CitizenId'], 'required'],
            [['AuthId', 'Rank', 'Status'], 'integer'],
            [['Date'], 'safe'],
            [['UserName'], 'string', 'max' => 50],
            [['Phone'], 'string', 'max' => 20],
            [['Password', 'Address'], 'string', 'max' => 200],
            [['FullName', 'CitizenId', 'Email', 'SocialNet', 'Notes'], 'string', 'max' => 100],
            [['Images'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'AuthId' => 'Auth ID',
            'UserName' => 'User Name',
            'Phone' => 'Phone',
            'Password' => 'Password',
            'FullName' => 'Full Name',
            'Address' => 'Address',
            'CitizenId' => 'Citizen ID',
            'Email' => 'Email',
            'SocialNet' => 'Social Net',
            'Images' => 'Images',
            'Notes' => 'Notes',
            'Rank' => 'Rank',
            'Status' => 'Status',
            'Date' => 'Date',
        ];
    }
}
