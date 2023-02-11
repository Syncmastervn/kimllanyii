<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;



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
    <style>

    </style>    
</head>
<body>
<?php $this->beginBody() ?>
<!-- THIS FOR RENDER PARTIAL 
     load _partial.php at views/folder, can use '/site/_partial' for more load
     </?= Yii::$app->controller->renderPartial('//_partial'); ?>
-->
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => '',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => 'http://192.168.1.68/deposite/frontend/web/index.php?r=site/index'],
        ['label' => 'Login', 'url' => ['/site/login']],
        ['label' => 'Thao tác',
                'url' => ['#'],
                'template' => '<a href="{url}">{label}<i class="fa fa-angle-left pull-right"></i></a>',
            'items' => [
                    ['label' => 'Tạo sản phẩm mới', 'url' => Yii::getAlias('@web').'/index.php?r=dashboard/invoice-create'],
                    ['label' => 'Tìm kiếm sản phẩm', 'url' => Yii::getAlias('@web').'/index.php?r=dashboard/search'],
                    ['label' => 'Thông tin cá nhân', 'url' => Yii::getAlias('@web').'/index.php?r=dashboard/invoice-extend-delete'],
                    ['label' => 'Thông tin', 'url' => Yii::getAlias('@web').'/index.php?r=dashboard/chart']
                ]
        //['label' => 'Logout', 'url' => ['/site/logout']]
        ]];
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">
            <?php 
                $sessGet = Yii::$app->session->get('userId');
                $authority = Yii::$app->session->get('authority');
                $username = Yii::$app->session->get('username');
                if($sessGet === null): ?>
            <b>Chưa đăng nhập</b>
            <?php else: ?>
            <b>User: </b> 
            <?php 
                    if($authority === 1) 
                        echo "Quản lý cấp cao";
                    else if($authority === 2)
                        echo "Nhân viên";
            ?>
            <?php endif; ?>
            - <?= $username ?>
        </p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
