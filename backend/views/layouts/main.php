<?php

/* @var $this \yii\web\View */
/* @var $content string */

    use backend\assets\AppAsset;
    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
    use common\widgets\Alert;
    use yii\caching\ApcCache;


    //include for using SubMenu
    use yii\widgets\Menu;

    AppAsset::register($this);

    
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- <meta charset="<Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?php
        //$this->registerJsFile(Yii::getAlias('@web').'/js/vendors/jquery-3.6.0.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendors/bootstrap.bundle.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendors/select2.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendors/perfect-scrollbar.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendors/jquery.fullscreen.min.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/vendors/chart.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/main.js',['depends' => 'yii\web\JqueryAsset']);
        $this->registerJsFile(Yii::getAlias('@web').'/js/custom-chart.js',['depends' => 'yii\web\JqueryAsset']);
    ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= Yii::getAlias('@web') ?>/assets/imgs/theme/favicon.svg">
    <!-- Template CSS -->
    <link href="<?= Yii::getAlias('@web') ?>/css/main.css" rel="stylesheet" type="text/css" />

    

    <style>

    </style>    
    
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <div class="container">
    <?php echo $this->render('_leftMenu'); ?>
        <main class="main-wrap">
            
            <?php echo $this->render('_headerNavbar'); ?>

            <?= $content ?>

        </main>
    </div>
</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
