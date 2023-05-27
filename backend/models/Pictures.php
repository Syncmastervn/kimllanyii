<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;

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
            [['Image'], 'file', 'extensions' => 'png,jpg,gif', 'maxFiles' => 5, 'skipOnEmpty' => false],
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

    public function upload()
    {
        $path = dirname(__FILE__) . '/../../uploads/';
        if ($this->Image && $this->validate()) {
            foreach ($this->Image as $file) {
                $name = $file->baseName . '_' . rand(1, 99) . '.' . $file->extension;
                $smodel = new Picture();
               // $smodel->ProductId = $this->ProductId;
                $smodel->ProductId = Yii::$app->cache->get('productId');
                $smodel->Image = $name;
                if ($smodel->save()) {
                    $file->saveAs($path . $name);
                }
            }
            return true;
        } else {
            return false;
        }
    }
}