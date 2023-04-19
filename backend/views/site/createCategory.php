<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

?>

        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Tạo loại vàng</h2>
                    <p>Thêm,xóa và chỉnh sửa các loại vàng</p>
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                        <?php $form = ActiveForm::begin(['id'=>'CreateCategoryForm']); ?>
                            <form>
                                <div class="mb-4">
                                    <?= $form->field($model,'Name')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control'])?>
                                </div>
                                <div class="mb-4">
                                    <?= $form->field($model,'Price')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control']) ?>
                                </div>
                                <div class="mb-4">
                                    <?= $form->field($model,'Description')->textArea(['rows'=>4]); ?>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary">Tạo mới</button>
                                </div>
                            </form>
                        <?php $form = ActiveForm::end(); ?>
                        </div>
                        <div class="col-md-8">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Giá</th>
                                            <th>Mô tả</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i =0;
                                        foreach($categoryData as $row): 
                                    ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td><?= $row['Name'] ?></td>
                                            <td><?= $row['Price'] ?></td>
                                            <td><?= $row['Description'] ?></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">View detail</a>
                                                        <a class="dropdown-item" href="#">Edit info</a>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div> <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div> <!-- .col// -->
                    </div> <!-- .row // -->
                </div> <!-- card body .// -->
            </div> <!-- card .// -->
        </section> <!-- content-main end// -->
        <footer class="main-footer font-xs">
            <div class="row pb-30 pt-15">
                <div class="col-sm-6">
                    <script>
                    document.write(new Date().getFullYear())
                    </script> ©, Evara - HTML Ecommerce Template .
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end">
                        All rights reserved
                    </div>
                </div>
            </div>
        </footer>
