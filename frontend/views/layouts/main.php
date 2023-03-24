<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
// use yii\bootstrap\Nav;
// use yii\bootstrap\NavBar;
// use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="icon" href="../web/favicon.ico" type="image/x-icon" sizes="16x16">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendor/modernizr-3.6.0.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendor/jquery-migrate-3.3.0.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendor/bootstrap.bundle.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/slick.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery.syotimer.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/wow.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery-ui.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/perfect-scrollbar.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/magnific-popup.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/select2.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/waypoints.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/counterup.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery.countdown.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/images-loaded.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/isotope.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/scrollup.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery.vticker-min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery.theia.sticky.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/jquery.elevatezoom.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/plugins/imagesloaded.pkgd.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/main.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/shop.js',['depends' => 'yii\web\JqueryAsset']);

    ?>
</head>
<body>
<?php $this->beginBody() ?>

    <div class="wrap">

            <?= $content ?>
    
    </div>

    <footer class="footer">
        
    </footer>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
