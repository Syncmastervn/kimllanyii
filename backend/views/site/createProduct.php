
<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use backend\models\Category;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$this->registerCssFile(Yii::getAlias('@web').'/css/index-backend.css');
?>
<div class="site-index">

    <div class="body-content">
        <div class="container">
            <div class="form-group col-md-6">
            <?php $form = ActiveForm::begin(['id'=>'CreateInvoiceForm']); ?>
                <form class="form-horizontal" role="form">
                    <h2>Tạo sản phẩm</h2>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <?= $form->field($model,'Name')->textInput(['autofocus'=>true])->hint('Tên sản phẩm'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <?= $form->field($model, 'Price')->textInput(['type'=>'number'])->hint('Giá tiền'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <?= $form->field($model, 'Category')->textInput(['type'=>'number', 'value'=>1])->hint('Giá tiền'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <?= $form->field($model, 'UserId')->textInput(['type'=>'number', 'value'=>1])->hint('Giá tiền'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-9">
                            <?= $form->field($model, 'Description')->textInput(['value'=>'Mô tả mặc định'])->hint('Giá tiền'); ?>
                        </div>
                    </div>
                    <!-- <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" id="birthDate" class="form-control">
                        </div>
                    </div> -->
                    
                    <div class="form-group">
                        <div class="col-sm-9 ">
                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                        </div>
                    </div>
                </form> <!-- /form -->
            </div>
            <?php $form = ActiveForm::end(); ?>
            <div class="form-group col-md-6"></div>
        </div> <!-- ./container -->
    </div>
</div>
