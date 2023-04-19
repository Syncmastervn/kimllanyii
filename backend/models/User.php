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
    public $RepeatPassword; //sử dụng để cho nhập lại password lần 2 
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
            [['Images'], 'string', 'max' => 150]
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
            'UserName' => 'Tên đăng nhập',
            'Phone' => 'Điện thoại',
            'Password' => 'Password',
            'FullName' => 'Họ và Tên',
            'Address' => 'Địa chỉ',
            'CitizenId' => 'Căn cước công dân',
            'Email' => 'Email',
            'SocialNet' => 'Social Net',
            'Images' => 'Images',
            'Notes' => 'Ghi chú',
            'Rank' => 'Cấp',
            'Status' => 'Status',
            'Date' => 'Date',
        ];
    }
}
