<?php
namespace backend\controllers;

use Yii;
use yii\helpers\ArrayHelper;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\helpers\Url;
use yii\helpers\FileHelper;
use common\models\LoginForm;
use backend\models\BehaviModel;

//Use more _ KIEN CODE
use backend\models\Product;
use backend\models\Category;
use backend\models\Authority;
use backend\models\User;
use backend\models\Pictures;
use backend\models\ProductGroup;
use backend\models\Picture;
use yii\base\Action;
use yii\base\Security;
use yii\web\UploadedFile;
use yii\data\Pagination; // Sử dụng phân trang của Yii 2.0


// ok xin mời 

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @KIEN CODE
     */
    public $variable = '';
    public $sess;
    public $actionActive;
    public $localhost;
    public $sql;
    /**
     * @inheritdoc
     */
    public function actions()
    {
        //$this->actionActive = Yii::$app->controller->id;
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
        
    }
    
    public function init() {
        
    }

    //Kiểm tra Session , Login ..v..v trước khi thực thi các function chính
    public function beforeAction($action)
    {
            $session = Yii::$app->session;
            if(!$session->isActive)
            {
                $session->open();
            }
            if(!$session->has('user_id'))
            {
                if(Yii::$app->controller->action->id != 'login')
                {
                    //return $this->render('login_failed');
                    $this->redirect(array('site/login'));
                }else
                {
                    return true;
                }
            }
            return true;
    }

    public function authority(){
        $this->sess = Yii::$app->session;
        $this->actionActive = Yii::$app->controller->action->id;
        $_session = $this->sess['authority'];
        if($this->actionActive != 'login' && $_session == null)
            $this->redirect(array('site/login'));
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $footerContent = "Nội dung Footer nè";
        return $this->render('index',['footerContent' => $footerContent]);
    }

    public function actionBlank()
    {
        echo Yii::getAlias('@web');
    }

    public function actionProduct_group()
    {
        $model = new ProductGroup();
        $request = Yii::$app->request;
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $record = new ProductGroup();
            $record->Name = $request->post('ProductGroup')['Name'];
            $record->Note = $request->post('ProductGroup')['Note'];
            $record->Rank = $request->post('ProductGroup')['Rank'];
            $record->save();
            $PG_data = ProductGroup::find()->all();
            return $this->render('createProductGroup',['model'=>$model,'PG_data'=>$PG_data,'message'=>'Tạo dữ liệu mới thành công']);
        }
        $PG_data = ProductGroup::find()->all();
        return $this->render('createProductGroup',['model'=>$model,'PG_data'=>$PG_data,'message'=>'NoMessage']);
    }

    public function actionCreate_product()
    {
        $model = new Product();
        $pics = new Picture();
        $request = Yii::$app->request;
        $category_opt = [];
        $categoryId = [];
        $groupId = [];
        $group_opt = [];
        $pics_opt = [];
        $picsId = [];
        $i = 0;
        $pics = Picture::find()->where(['ProductId'=>0])->all();
        $category = Category::find()->all();
        $productGroup = ProductGroup::find()->all();
        foreach($pics as $row)
        {
            array_push($pics_opt,$row['Image']);
            array_push($picsId,$row['Id']);
        }
        foreach($category as $row)
        {
            array_push($category_opt,$row['Name']);
            array_push($categoryId,$row['Id']);
        }
        foreach($productGroup as $row)
        {
            array_push($group_opt,$row['Name']);
            array_push($groupId,$row['Id']);
        }
        if($model->load(Yii::$app->request->post()))
        {
            $record = new Product();
            $record->Name = $request->post('Product')['Name'];
            $record->Description = $request->post('Product')['Description'];
            $record->Price = (int)$request->post('Product')['Price'];
            $record->Discount = (int)$request->post('Product')['Discount'];
            $record->CategoryId = $categoryId[(int)$request->post('categoryOpt')];
            $record->GroupId = $groupId[(int)$request->post('productGroupOpt')];
            $record->UserId = 1;
            $record->save();
            $recordId = $record->Id; //Lấy Id của record vừa lưu trong CSDL

            //Set to cache 
            Yii::$app->cache->set('productName',$record->Name,30);
            Yii::$app->cache->set('productId',$recordId,30);
            Yii::$app->cache->set('ImageNames','',30);

            $model = new Pictures();
            $model->ProductId = $recordId;
            $model->Image = UploadedFile::getInstances($model, 'Image');

            $this->redirect(['site/upload_files']);
        }else
        {
            return $this->render('createProduct',['model'=>$model,'category_opt'=>$category_opt,'group_opt'=>$group_opt]);
        }
        
    }

    public function actionProduct_edit()
    {
        $data = Yii::$app->request->get('data');
        $product = Product::findOne($data);
        $model = new Product();
        if($model->load(Yii::$app->request->post()))
        {
            $record = Product::findOne($data);
            $record->Name = Yii::$app->request->post('Product')['Name'];
            $record->Description = Yii::$app->request->post('Product')['Description'];
            $record->Price = Yii::$app->request->post('Product')['Price'];
            $record->save();
            return $this->render('productEdit',['model'=>$model,'product'=>$record]);
        }else
        {
            return $this->render('productEdit',['model'=>$model,'product'=>$product]);
        }
        
    }

    public function actionProduct_manage()
    {
        if(Yii::$app->request->get('TopView') != null)
        {
            $product = Product::findOne(Yii::$app->request->get('TopView'));
            $product->Rank = 2;
            $product->save();
        }

        if(Yii::$app->request->get('Edit') != null)
        {
            return $this->redirect(['/site/product_edit', 'data' => Yii::$app->request->get('Edit')]);
        }

        if(Yii::$app->request->get('Reset') != null)
        {
            $product = Product::findOne(Yii::$app->request->get('Reset'));
            $product->Rank = 0;
            $product->save();
        }

        if(Yii::$app->request->get('Best') != null)
        {
            $product = Product::findOne(Yii::$app->request->get('Best'));
            $product->Rank = 1;
            $product->save();
        }

        if(Yii::$app->request->get('Delete') != null)
        {
            echo '<h3> Xóa sản phẩm </h3>';
        }

        // Số lượng sản phẩm trên mỗi trang
        $itemsPerPage = 10;

        // Tạo đối tượng Pagination dùng để phân trang có hỗ trợ bởi Yii 2.0
        $pagination = new Pagination([
            'defaultPageSize' => 10, // Số lượng mục trên mỗi trang
            'totalCount' => Product::find()->where(['Status' => 1])->count(), // Tổng số mục
        ]);

        $TopRankViewProds = Product::find()
            ->where(['Rank' => 2])
            ->all();
        $product = Product::find()
            ->where(['Status' => 1])
            ->orderBy(['GroupId' => SORT_ASC])
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
        return $this->render('productManage',['products'=>$product,'pagination'=>$pagination]);
    }

    public function actionUpload_files()
    {
        $productId = Yii::$app->cache->get('productId');
        $productName = Yii::$app->cache->get('productName');
        $model = new Pictures();
        if (Yii::$app->request->isPost) {
            $model->ProductId = 0;
            $model->Image = UploadedFile::getInstances($model, 'Image');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->render('uploadFiles',['upload'=>$model,'productId'=>$productId,'productName'=>$productName]);
                //$this->redirect(['site/create_product']);
            }
        }
        return $this->render('uploadFiles',['upload'=>$model,'productId'=>$productId,'productName'=>$productName]);
    }

    //Action gốc làm upload file
    public function actionMultiple()
    {
        $model = new Pictures();
        if (Yii::$app->request->isPost) {
            $model->ProductId = 0;
            $model->Image = UploadedFile::getInstances($model, 'Image');
            if ($model->upload()) {
                // file is uploaded successfully
                // return $this->render('muntipleUpdate');
                return $this->render('multipleUpload',['upload'=>$model]);
            }
        }
        return $this->render('multipleUpload',['upload'=>$model]);
    }

    public function actionCreate_category() //Tạo loại vàng
    {
        $model = new Category(); //Model này được tạo ra bằng gii 
        $request = Yii::$app->request;
        $categoryData = new Category();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $record = new Category;
            $record->Name = $request->post('Category')['Name'];
            $record->Price = $request->post('Category')['Price'];
            $record->Description = $request->post('Category')['Description'];
            $record->save();
            $categoryData = Category::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('createCategory',['model'=>$model,'categoryData'=>$categoryData,'message'=>'Tạo dữ liệu mới thành công']);
        }else
        {
            $categoryData = Category::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('createCategory',['model'=>$model,'categoryData'=>$categoryData,'message'=>'NoMessage']);
        } 
    }


    public function actionCreate_user() //Tạo người sử dụng
    {
        $model = new User(); //Model này được tạo ra bằng gii 
        $request = Yii::$app->request;
        $userData = new User();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $record = new User;
            $record->AuthId = $request->post('User')['AuthId']; //Thiết lập mẫu mỗi khi tạo user đều là Admin
            $record->UserName = $request->post('User')['UserName'];
            $record->Password = $request->post('User')['Password'];
            $record->FullName = $request->post('User')['FullName'];
            $record->Address = $request->post('User')['Address'];
            $record->CitizenId = $request->post('User')['CitizenId'];
            $record->Email = $request->post('User')['Email'];
            $record->Phone = $request->post('User')['Phone'];
            $record->Notes = $request->post('User')['Notes'];
            $record->save();
            
            $userData = User::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('_user',['model'=>$model,'userData'=>$userData,'messages'=>"Lưu dữ liệu thành công"]);
        }else
        {
            $userData = User::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('_user',['model'=>$model,'userData'=>$userData,'messages'=>'NoMessage']);
        } 
        

    }

    public function actionFile_list()
    {
        $fileList = FileHelper::findFiles('../../uploads');
        echo "<h2>FileList</h2>";
        foreach($fileList as $file)
        {
            echo basename($file) . "<br>";
        }
    }
    
    public function actionCreate_authority()
    {
        $model = new Authority();
        $request = Yii::$app->request;
        $list_rank = ['1'=>'Admin', '2'=>'Manager', '3'=>'User', '4'=>'VIP'];
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            $record = new Authority();
            $record->Name = $request->post('Authority')['Name'];
            $record->Description = $request->post('Authority')['Description'];
            $record->Rank = $request->post('selector');
            $record->save();
            $authorityData = Authority::find()->all();
            return $this->render('createAuthority',['model'=>$model,'authorityData'=>$authorityData,'list_rank'=>$list_rank,'message'=>'Tạo dữ liệu mới thành công']);
        }else
        {
            $authorityData = Authority::find()->all();
            return $this->render('createAuthority',['model'=>$model,'authorityData'=>$authorityData,'list_rank'=>$list_rank,'message'=>'NoMessage']);
        }
        
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $security = new Security();
        $model = new User();
        $request = Yii::$app->request;
        $session = Yii::$app->session;
        $session->destroy();
        if($model->load(Yii::$app->request->post()))
        {
            $record = User::findOne(['UserName'=>$request->post('User')['UserName']]);
            if($record !== null && $security->validatePassword($request->post('User')['Password'],$record->Password))
            {
                $session->open();
                $session->setName('Login');
                $session->set('user_id',$record->Id);
                $session->set('user_status',$record->Status);
                $session->set('username',$record->UserName);
                return $this->render('login_success',['username'=>$record->UserName]);
            }
        }
        return $this->render('login',['model'=>$model]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        $this->redirect(array('/site/login'));
        //return $this->goHome();
    }
    
    public function actionChange_password()
    {
        $session = Yii::$app->session;
        $session->get('user_id');
        
    }

    //Function này dùng để thay đổi mặc định password cho admin
    public function actionAdmin_password()
    {
        $security = new Security();
        $hashedPassword = $security->generatePasswordHash('admin88');
        $record = User::findOne(1);
        $record->Password = $hashedPassword;
        if($record->save())
        {
            echo 'Mật khẩu Admin đã thay đổi mặc định thành công';
        }else
        {
            echo 'Mật khẩu Admin thay đổi không thành công';
        }
    }   

    /*
    * Register admini/manager user
    */
    public function actionRegister(){
        
        //$this->authority();
        
        $model = new Register();
        $request = Yii::$app->request;
        if($model->load(Yii::$app->request->post()) && $model->validate() ) 
        {
            $get = 0;
            $username = $request->post('Register')['username'];
            $result = $this->sql->CheckUser($username);
            if($result)
            {
                echo "User exists";
            } else
            {
                echo "User not exists";
            }
        } else
        {
            return $this->render('register',[
                'model' =>  $model,
                'login' =>  $this->sess['authority']['login']
            ]);
        }
        
    }
    
    
    /*
    * Tetsing code
    */
    
    public function actionTest(){
        return $this->render('jqueryui');
    }
    
    public function actionDatatable(){
        return $this->render('datatable');
    }

    /*
    * BEHAVIOR testing @KIEN CODE
    */
    public function actionBehavi(){
        $b = new BehaviModel();
        echo $b->userName;
    }

}
