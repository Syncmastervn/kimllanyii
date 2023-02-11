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

    public function actionCreate()
    {
        $model = new Product();
        return $this->render('createProduct',
        ['model'=>$model]
        );
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
