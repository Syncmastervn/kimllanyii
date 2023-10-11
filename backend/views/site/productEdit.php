<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Chỉnh sửa thông tin sản phẩm</h2>
                        <div>
                            <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                            <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Nhập các thông tin yêu cầu</h4>
                        </div>
                        <div class="card-body">
                        <?php $form = ActiveForm::begin(['id'=>'UpdateProduct']); ?>
                            <form>
                                <div class="mb-4">
                                    <?= $form->field($model,'Name')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control','value'=>$product->Name])?>
                                </div>
                                <div class="mb-4">
                                    <?= $form->field($model,'Description')->textArea(['rows'=>4,'value'=>$product->Description]); ?>
                                </div>  	
                                <div class="mb-4">
                                    <?= $form->field($model,'Price')->textInput(['rows'=>4,'value'=>$product->Price]); ?>
                                </div> 
                                <div class="mb-4">
                                    <button class="btn btn-primary">Tạo mới</button>
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
                                Khi tạo sản phẩm thì phải chọn Loại sản phẩm và nhóm sản phẩm cho sản phẩm đang được tạo mới.
                            </form>
                        </div>
                    </div> <!-- card end// -->
                </div>
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
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Chọn nhóm sản phẩm</h4>
                        </div>
                        <div class="card-body">
                            <div class="row gx-2">
                                
                                
                                
                            </div> <!-- row.// -->
                        </div>
                    </div> <!-- card end// -->
                </div>
                
                <?php $form = ActiveForm::end(); ?>
            </div>
        </section>