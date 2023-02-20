<?php

namespace frontend\assets;

use Yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        //'css/site.css',
        'css/site.css'
        //'css/jquery.fancybox.min.css'
    ];
    public $js = [
        //'js/jquery.fancybox.min.js'        
    ];
    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',  <-- disable dòng này để tắt bootstrap có sẵn trong Yii 2.0 để sử dụng bootstrap trong themes
}
