<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
        <section class="content-main">
            <div class="content-header">
                <div>
                    <h2 class="content-title card-title">Tùy chỉnh cấp độ sản phẩm</h2>
                    <p>Sắp xếp việc hiển thị sản phấm, tùy chỉnh cấp độ và mức độ</p>
                </div>
                <div>
                    <input type="text" placeholder="Search Categories" class="form-control bg-white">
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên</th>
                                            <th>Mô tả</th>
                                            <th>Cấp độ</th>
                                            <th>Nhóm SP</th>
                                            <th class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $i =0;
                                        foreach($products as $row): 
                                    ?>
                                        <tr>
                                            <td><?= ++$i ?></td>
                                            <td><?= $row['Name'] ?></td>
                                            <td><?= $row['Description'] ?></td>
                                            <td><?= ($row['Rank'] == 0)?'Thường': (($row['Rank'] == 2)? 'Ưu tiên' : 'Hạng nhất') ?></td>
                                            <td><?= $row['GroupId'] ?></td>
                                            <td class="text-end">
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                    	<?= Html::a('Hàng mới', ['site/product_manage', 'TopView' => $row['Id']], ['class' => 'dropdown-item']) ?>
                                                        <?= Html::a('Đặc biệt', ['site/product_manage', 'Best' => $row['Id']], ['class' => 'dropdown-item']) ?>
                                                        <?= Html::a('Thường', ['site/product_manage', 'Reset' => $row['Id']], ['class' => 'dropdown-item']) ?>
                                                        <?= Html::a('Chỉnh sửa', ['site/product_manage', 'Edit' => $row['Id']], ['class' => 'dropdown-item']) ?>
                                                        <?= Html::a('Xóa bỏ', ['site/product_manage', 'Delete' => $row['Id']], ['class' => 'dropdown-item text-danger']) ?>
                                                    </div>
                                                </div> <!-- dropdown //end -->
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                                <div class="pagination-area mt-30 mb-50">
	                                    <nav arial-label="Page navigation example"">
	                                    <?php
	                                    	echo LinkPager::widget([
											    'pagination' => $pagination,
											    'options' => ['class' => 'pagination justify-content-start'], // Tùy chỉnh class CSS cho phân trang
											    'prevPageLabel' => false, // Nhãn trang trước
											    'nextPageLabel' => false, // Nhãn trang sau
											    'pageCssClass' => 'page-item', // Class CSS cho mỗi trang
											    'linkOptions' => ['class' => 'page-link'], // Class CSS cho mỗi liên kết trang
											    'activePageCssClass' => 'active', // Class CSS cho trang hiện tại
											    'disabledPageCssClass' => 'disabled', // Class CSS cho trang bị vô hiệu hóa
											    'maxButtonCount' => 10, // Số lượng liên kết trang tối đa được hiển thị
											    'hideOnSinglePage' => false, // Ẩn phân trang nếu chỉ có một trang
											]);
	                                    ?>
	                                       </nav>
	                                 </div>
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
