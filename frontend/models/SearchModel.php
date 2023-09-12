<?php
namespace frontend\models;

class SearchModel extends \yii\base\Model
{
    public $search;

    public function rules()
    {
        return [
            // [['name', 'email'], 'required'],
            [['search'], 'string'],
        ];
    }
}