<?php

    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use backend\models\Authority;
    
?>
<section class="content-main">
            <div class="row">
                <div class="col-9">
                    <div class="content-header">
                        <h2 class="content-title">Tải file hình ảnh cho sản phẩm</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Có thể chọn nhiều hình ảnh để upload</h4>
                        </div>
                        <div class="card-body">
                        <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
                            <form>
                                <div class="mb-4">
                                    ID: <?= $productId ?> : <b> <?= $productName ?> </b>
                                </div>
                                <div class="mb-4">
                                    <?= $form->field($upload, 'Image[]')->fileInput(['multiple' => true, 'accept' => 'image/*']) ?>
                                </div>
                                
                                <div class="mb-4">

                                    <button class="btn btn-primary">Tải lên</button>
                                    
                                </div>
                                <label class="form-check mb-4">
                                    <!-- <input class="form-check-input" type="checkbox" value="">
                                    <span class="form-check-label"> Make a template </span> -->
                                </label>
                            </form>
                            
                        </div>
                    </div> <!-- card end// -->
                </div>
                <?php $form = ActiveForm::end(); ?>
            </div>
        </section>