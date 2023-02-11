
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
                            <input type="password" id="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                        <div class="col-sm-9">
                            <input type="date" id="birthDate" class="form-control">
                        </div>
                    </div>
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
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Gender</label>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="femaleRadio" value="Female">Female
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="maleRadio" value="Male">Male
                                    </label>
                                </div>
                                <div class="col-sm-4">
                                    <label class="radio-inline">
                                        <input type="radio" id="uncknownRadio" value="Unknown">Unknown
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <label class="control-label col-sm-3">Meal Preference</label>
                        <div class="col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="calorieCheckbox" value="Low calorie">Low calorie
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="saltCheckbox" value="Low salt">Low salt
                                </label>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">I accept <a href="#">terms</a>
                                </label>
                            </div>
                        </div>
                    </div> <!-- /.form-group -->
                    <div class="form-group">
                        <div class="col-sm-9 col-sm-offset-3">
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
