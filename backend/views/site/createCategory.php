
<?php
    use yii\helpers\Html;
    use yii\helpers\ArrayHelper;
    use yii\widgets\ActiveForm;
    use backend\models\Category;

    $this->registerCssFile(Yii::getAlias('@web').'/css/table-themes.css');
/* @var $this yii\web\View */

$this->title = 'Category';
$this->registerCssFile(Yii::getAlias('@web').'/css/index-backend.css');
?>
<div class="site-index">

    <div class="body-content">
        <div class="container">
            <div class="form-group col-md-6">
                <?php $form = ActiveForm::begin(['id'=>'CreateCategoryForm']); ?>
                    <form class="form-horizontal" role="form">
                        <h2>Tạo loại vàng</h2>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <?= $form->field($model,'Name')->textInput(['autofocus'=>true, 'maxlength'=>30, 'class'=>'form-control'])->hint('Tên các loại vàng'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-9">
                                <?= $form->field($model, 'Price')->textInput(['type'=>'number'])->hint('Giá tiền'); ?>
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
            <div class="col-md-12">
            <table class="table table-bg-grey">
                <thead class="table-bg-change-orange">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col table-text-blink">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
            </table>

            </div>
        </div> <!-- ./container -->
    </div>
</div>
