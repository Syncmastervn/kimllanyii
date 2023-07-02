<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;

    $this->registerCssFile(Yii::getAlias('@web').'/css/table-themes.css');

/* @var $this yii\web\View */

    $this->title = 'User';

    /** Popup thông báo sử dụng cho tất cả các site- KIEN's Codes
     *  1. File popup-modal.js - dùng Bootstrap 3.0
     *  2. Trong thẻ style dùng display: none ẩn nút gọi popup-modal
     *  3. dùng jquery kiểm tra nội dung modal-body để ẩn hoặc hiện popup
     */
    $this->registerJsFile(Yii::getAlias('@web').'/js/popup-modal.js',['depends' => 'yii\web\JqueryAsset']);

?>
<style>
    /** Ẩn đi nút bấm mở Popup của bootstrap, ẩn hoàn toàn không chiếm diện tích trang web */
    #modal-button{
        display: none;
    }
</style>
        <section class="content-main mt-80 mb-80">
            <div class="card mx-auto card-login">
                <div class="card-body">
                    <h4 class="card-title mb-4">Sign in</h4>
                    <?php $form = ActiveForm::begin(['id'=>'UserLogin']); ?>
                        <form>
                            <div class="mb-3">
                                <?= $form->field($model,'UserName')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control'])->hint('UserName'); ?>
                            </div> <!-- form-group// -->
                            <div class="mb-3">
                                <?= $form->field($model,'Password')->passwordInput(); ?>
                            </div> <!-- form-group// -->
                            <div class="mb-3">
                                <a href="#" class="float-end font-sm text-muted">Forgot password?</a>
                                <label class="form-check">
                                    <input type="checkbox" class="form-check-input" checked="">
                                    <span class="form-check-label">Remember</span>
                                </label>
                            </div> <!-- form-group form-check .// -->
                            <div class="mb-4">
                                <button type="submit" class="btn btn-primary w-100"> Login </button>
                            </div> <!-- form-group// -->
                        </form>
                    <?php $form = ActiveForm::end(); ?>
                    <p class="text-center small text-muted mb-15">or sign up with</p>
                    <div class="d-grid gap-3 mb-4">
                        <a href="#" class="btn w-100 btn-light font-sm">
                            <svg aria-hidden="true" class="icon-svg" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M16.51 8H8.98v3h4.3c-.18 1-.74 1.48-1.6 2.04v2.01h2.6a7.8 7.8 0 002.38-5.88c0-.57-.05-.66-.15-1.18z" fill="#4285F4"></path>
                                <path d="M8.98 17c2.16 0 3.97-.72 5.3-1.94l-2.6-2a4.8 4.8 0 01-7.18-2.54H1.83v2.07A8 8 0 008.98 17z" fill="#34A853"></path>
                                <path d="M4.5 10.52a4.8 4.8 0 010-3.04V5.41H1.83a8 8 0 000 7.18l2.67-2.07z" fill="#FBBC05"></path>
                                <path d="M8.98 4.18c1.17 0 2.23.4 3.06 1.2l2.3-2.3A8 8 0 001.83 5.4L4.5 7.49a4.77 4.77 0 014.48-3.3z" fill="#EA4335"></path>
                            </svg> Sign in using Google
                        </a>
                        <a href="#" class="btn w-100 btn-light font-sm">
                            <svg aria-hidden="true" class="icon-svg" width="20" height="20" viewBox="0 0 20 20">
                                <path d="M3 1a2 2 0 00-2 2v12c0 1.1.9 2 2 2h12a2 2 0 002-2V3a2 2 0 00-2-2H3zm6.55 16v-6.2H7.46V8.4h2.09V6.61c0-2.07 1.26-3.2 3.1-3.2.88 0 1.64.07 1.87.1v2.16h-1.29c-1 0-1.19.48-1.19 1.18V8.4h2.39l-.31 2.42h-2.08V17h-2.5z" fill="#4167B2"></path>
                            </svg> Sign in using Facebook
                        </a>
                    </div>
                    <p class="text-center mb-4">Don't have account? <a href="#">Sign up</a></p>
                </div>
            </div>
        </section>
        <footer class="main-footer text-center">
            <p class="font-xs">
                <script>
                document.write(new Date().getFullYear())
                </script> ©, Evara - HTML Ecommerce Template .
            </p>
            <p class="font-xs mb-30">All rights reserved</p>
        </footer>