<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\helpers\Url;
use yii\backend\Models;


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
        $i = 1;
        $path = dirname(__FILE__) . '/../../frontend/web/imgs/shop/';
        if ($this->Image && $this->validate()) {
            foreach ($this->Image as $file) {
                //$name = 'ID' . Yii::$app->cache->get('productId') . '_' . $file->baseName . rand(1, 99) . '_' . $names[$i] . '.' . $file->extension;
                $name = 'ID' . Yii::$app->cache->get('productId') . '_' . $i++ . '.' . $file->extension;
                $imageName = $name . ';';
                $Sql_name = Yii::$app->cache->get('ImageNames');
                $Sql_name .= $imageName;
                Yii::$app->cache->set('ImageNames',$Sql_name);
                $smodel = new Picture();
                $smodel->ProductId = Yii::$app->cache->get('productId');
                $smodel->Image = $name;
                if ($smodel->save()) {
                    $file->saveAs($path . $name);
                }
            }

            $updateImage = Product::findOne(Yii::$app->cache->get('productId'));
            $updateImage->Images = Yii::$app->cache->get('ImageNames');
            $updateImage->save();

            return true;
        } else {
            return false;
        }


    }
}