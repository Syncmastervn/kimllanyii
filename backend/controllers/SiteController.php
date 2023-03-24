<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\BehaviModel;

//Use more _ KIEN CODE
use backend\models\Product;
use backend\models\Category;
use backend\models\Authority;
use backend\models\User;




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
        //$this->authority();
        return $this->render('index');
    }

    public function actionCreate_product() 
    {
        $model = new Product();
        return $this->render('createProduct',
        ['model'=>$model]
        );
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
            return $this->render('CreateCategory',['model'=>$model,'categoryData'=>$categoryData,'message'=>'Tạo dữ liệu mới thành công']);
        }else
        {
            $categoryData = Category::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('CreateCategory',['model'=>$model,'categoryData'=>$categoryData,'message'=>'NoMessage']);
        } 
        

    }

    public function actionCreate_user() //Tạo loại vàng
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
            return $this->render('CreateUser',['model'=>$model,'categoryData'=>$userData,'messages'=>"Lưu dữ liệu thành công"]);
        }else
        {
            $userData = User::find()->orderBy(['Date'=>SORT_DESC])->all();
            return $this->render('CreateUser',['model'=>$model,'categoryData'=>$userData,'messages'=>'NoMessage']);
        } 
        

    }
    
    public function actionCreate_authority()
    {
        $model = New Authority();
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
        echo "This is login site";
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
            
//            return $this->render('register',[
//                'model' =>  $model,
//                'login' =>  $get
//            ]);
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
