<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use backend\models\Authority;

    $this->registerCssFile(Yii::getAlias('@web') . '/css/table-themes.css');
    /* @var $this yii\web\View */

    /** Popup thông báo sử dụng cho tất cả các site- KIEN's Codes
     *  1. File popup-modal.js - dùng Bootstrap 3.0
     *  2. Trong thẻ style dùng display: none ẩn nút gọi popup-modal
     *  3. dùng jquery kiểm tra nội dung modal-body để ẩn hoặc hiện popup
     */
    $this->registerJsFile(Yii::getAlias('@web') . '/js/popup-modal.js', ['depends' => 'yii\web\JqueryAsset']);

    $this->title = 'Category';
    $this->registerCssFile(Yii::getAlias('@web') . '/css/index-backend.css');
?>
<style>
    /** Ẩn đi nút bấm mở Popup của bootstrap, ẩn hoàn toàn không chiếm diện tích trang web */
    #modal-button {
        display: none;
    }
</style>
<div class="site-index">

    <div class="body-content">
        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
        <?= $form->field($upload, 'Image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
        <button>Submit</button>
        <?php ActiveForm::end() ?>
    </div>
</div>