<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>
<section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Tạo sản phẩm</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </div>
                </div>
                <?php $form = ActiveForm::begin(['action'=>'index.php?r=site/upload_files','options' => ['enctype' => 'multipart/form-data']]) ?>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Nhập các thông tin yêu cầu</h4>
                        </div>
                        <div class="card-body">
                        
                            <form>
                                <div class="mb-4">
                                    <?= $form->field($upload, 'Image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                                </div>
                                <div class="mb-4">
                                    <button>Submit</button>
                                </div>
                                <div class="mb-4">
                                    Upload
                                </div>
                                <div class="mb-4">

                                    Danh sách các sản phẩm chưa có hình ảnh
                                    

                                </div>
                                
                                <label class="form-check mb-4">
                                    <!-- <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> Make a template </span> -->
                                </label>
                            </form>
                            
                        </div>
                    </div> <!-- card end// -->
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Lưu ý:</h4>
                        </div>
                        <div class="card-body">
                            <form>
                                Danh sách các sản phẩm chưa có hình ảnh
                            </form>
                        </div>
                    </div> <!-- card end// -->
                </div>
                <?php ActiveForm::end() ?>
                <div class="col-lg-3">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Media</h4>
                        </div>
                        <div class="card-body">
                            <div class="input-upload">
                                <img src="assets/imgs/theme/upload.svg" alt="">
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div> <!-- card end// -->
                </div>
               
            </div>
        </section>