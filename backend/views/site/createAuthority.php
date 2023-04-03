
<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use backend\models\Authority;

    $this->registerCssFile(Yii::getAlias('@web').'/css/table-themes.css');
/* @var $this yii\web\View */

    /** Popup thông báo sử dụng cho tất cả các site- KIEN's Codes
     *  1. File popup-modal.js - dùng Bootstrap 3.0
     *  2. Trong thẻ style dùng display: none ẩn nút gọi popup-modal
     *  3. dùng jquery kiểm tra nội dung modal-body để ẩn hoặc hiện popup
     */
    $this->registerJsFile(Yii::getAlias('@web').'/js/popup-modal.js',['depends' => 'yii\web\JqueryAsset']);

    $this->title = 'Category';
    $this->registerCssFile(Yii::getAlias('@web').'/css/index-backend.css');
?>
<style>
    /** Ẩn đi nút bấm mở Popup của bootstrap, ẩn hoàn toàn không chiếm diện tích trang web */
    #modal-button{
        display: none;
    }
</style>
<div class="site-index">

    <div class="body-content">
        <div class="container">
            <div class="form-group col-md-6">
                <?php $form = ActiveForm::begin(['id'=>'CreateAuthorityForm']); ?>
                    <form class="form-horizontal" role="form">
                        <div class="form-group">
                            <div class="col-sm-9">
                                <?= $form->field($model,'Name')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control'])->hint('Tên các loại vàng'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <?php echo Html::dropDownList('selector', null, $list_rank, ['class'=>'form-control']) ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <?= $form->field($model,'Description')->textArea(['rows'=>4]); ?>
                            </div>
                        </div>
                    <!-- 
                        <div class="form-group">
                            <label for="country" class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-9">
                                <select id="country" class="form-control">
                                    <option>Afghanistan</option>
                                    <option>Bahamas</option>
                                    <option>Cambodia</option>
                                    <option>Denmark</option>
                                    <option>Ecuador</option>
                                    <option>Fiji</option>
                                    <option>Gabon</option>
                                    <option>Haiti</option>
                                </select>
                            </div>
                        </div> 
                    -->
                        <!-- 
                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">I accept <a href="#">terms</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        -->
                        <div class="form-group">
                            <div class="col-sm-9">
                                <button type="submit" class="btn btn-primary btn-block">TẠO MỚI</button>
                            </div>
                        </div>
                    </form> <!-- /form -->
                </div>
                <?php $form = ActiveForm::end(); ?>
            <div class="form-group col-md-6"></div>
            <div class="form-group col-md-6">
                <h3>Tạo Phân Quyền</h3>
                <p>ADMIN: Người toàn quyền quản lý trong hệ thống
                <p>MANAGER: Người có một số quyền quản lý trong hệ thống
                <p>VIP: Người dùng có một số quyền cấp cao</p>
                <p>USER: Người dùng bình thường</p>
            </div>
            <?php if(!empty($authorityData)): 
                $i = 0;    
            ?>

                <div class="col-md-12">
                    <table class="table table-bg-grey">
                        <thead class="table-bg-change-orange">
                            <tr>
                            <th scope="col">Stt</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Mô tả</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($authorityData as $row): ?>
                                <tr>
                                    <td><?= ++$i ?></td>
                                    <td><?= $row['Name'] ?></td>
                                    <td><?= $row['Description'] ?></td>
                                    <td><?= $row['Rank'] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            
            <?php else: ?>
                <h3>Chưa có dữ liệu trong bảng Phân Quyền</h3>
            <?php endif; ?>    
        </div> <!-- ./container -->
    </div>
</div>
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#smallShoes" id="modal-button">
Click Me
</button>
<!-- The modal -->
<div class="modal fade" id="smallShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelSmall" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title" id="modalLabelSmall">THÔNG BÁO</h4>
            </div>

            <div class="modal-body"><?= $message ?></div>

        </div>
    </div>
</div>