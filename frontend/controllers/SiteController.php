<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;

//Kien code
use frontend\models\ContactForm;
use frontend\models\UserLogin;
use frontend\models\UploadImageForm;
use yii\web\UploadedFile;
use frontend\models\Invoice;
use frontend\models\BehaviModel;
use frontend\models\Product;
use frontend\models\SearchModel;
use frontend\models\ProductGroup;

//Json
use yii\helpers\Json;


//pageination
use yii\data\Pagination;

/**
 * Site controller
 */
class SiteController extends Controller
{
    
    public $mybehavior;
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }
    /**
     * @init function 
     * @KIEN CODE 
     */
    public function init(){
        $this->mybehavior = new BehaviModel();
    }
    
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    
    public function actionDatatable()
    {
        return $this->render('datatable');
    }
    
    // public function actionIndex()
    // {
    //     $product = Product::find()->all();
    //     $group = ProductGroup::find()->all();
    //     return $this->render('index',['product'=>$product,'group'=>$group]);
    // }

    public function actionIndex()
    {
        $product = Product::find()->all();
        $group = ProductGroup::find()->all();
        $groupId = array_map(function($data) {
            return $data['Id'];
        }, $group);
        $tab = ['one','two','three'];
        $tab_one = $tab_true = $tab_three = null ;
        $productFilter = ['one','two'];

        $tab_one = Product::find()
                ->where(['GroupId'=>$groupId[0]])
                ->all();

        $tab_two = Product::find()
                ->where(['GroupId'=>$groupId[1]])
                ->all();

        $tab_three = Product::find()
                ->where(['GroupId'=>$groupId[2]])
                ->all();

        $product_new = Product::find()
                ->where(['Rank'=>2])     //Rank = 2 là sản phẩm mới
                ->all();

        $product_special = Product::find()
                ->where(['Rank'=>1])    //Rank = 1 là sản phẩm đặc biệt
                ->all();


        $searchModel = new SearchModel(); //SearchModel được tạo ra bởi mr Nhân
        $request = Yii::$app->request;
        if($searchModel->load(Yii::$app->request->post()))
        {
            if($request->post('SearchModel')['search'] == 'kimlan')
            {
                $this->redirect(['site/product']);
            } else
            {
                //Lấy tất cả Id trong group và thêm vào $groupId
                return $this->render('index.twig',['searchModel' => $searchModel, 'alias_web'=>Yii::getAlias('@web'),'groups'=>$group,'products'=>$product,'tabs'=>$tab,'groupId'=>$groupId,'tab_one'=>$tab_one,'tab_two'=>$tab_two,'tab_three'=>$tab_three,'products_new'=>$product_new,'products_special'=>$product_special]);
            }
        }else
        {
            //Lấy tất cả Id trong group và thêm vào $groupId
            return $this->render('index.twig',['searchModel' => $searchModel, 'alias_web'=>Yii::getAlias('@web'),'groups'=>$group,'products'=>$product,'tabs'=>$tab,'groupId'=>$groupId,'tab_one'=>$tab_one,'tab_two'=>$tab_two,'tab_three'=>$tab_three,'products_new'=>$product_new,'products_special'=>$product_special]);
        }

        
    }

    public function actionChart(){
        return $this->render('chart');
    }
    
    public function actionInvoiceClose(){
        $record = Invoice::find()
                ->where(['<','status',1])
                ->All();
        
        return $this->render('invoice-close',['data'=>$record,'depositeSum'=>0]);
    }
    
    /**
     * Logs in a user.
     *
     * @return mixed
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionFullwidth()   //Hiển thị nội dung sản phẩm
    {
        $data = Yii::$app->request->get('data');
        $product = Product::findOne($data);
        return $this->render('product.twig',['alias_web'=>Yii::getAlias('@web'),'product'=>$product]);
    }

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Displays about page.
     *
     * @return mixed
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    /**
     * Signs user up.
     *
     * @return mixed
     */
    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
    
    public function actionSess()
    {
        $session = Yii::$app->session;
        $session->set('authKey','12345678');
        if($session->isActive)
        {
            $variable = $session->get('authKey');
            return $this->render('sessionT',['variable'=>$variable]);
        } else
        {
            $variable = 'NoActive';
            return $this->render('sessionT',['variable'=>$variable]);
        }
    }

    public function actionProduct_full()
    {
        return $this->render('productFull');
    }

    
    public function actionLogg()
    {
        $model = new UserLogin();
        if($model->load(Yii::$app->request->post()) && $model->validate())
        {
            Yii::$app->session->setFlash('success','You have entered data correctly');
        }
        
        return $this->render('userLogin',['model'=>$model]);
        
    }
    
    public function actionUploadImage() 
    {
        $file_name = 'trungkien';
        $model = new UploadImageForm();
        if (Yii::$app->request->isPost) {
            $model->image = UploadedFile::getInstance($model, 'image');
              if ($model->upload($file_name)) {
                 // file is uploaded successfully
                 echo "File successfully uploaded";
                 return;
              }
        }
       return $this->render('upload', ['model' => $model]);
    }
    
    public function actionJqueryActive()
    {
        return $this->render('jactive');
    }
    
    // public function actionTest(){
    //     return $this->render('test',['link'=>$this->mybehavior->uploadFolder() . 'trungkien.jpg']);
    // }
    
    public function actionFancybox(){
        return $this->render('fancybox');
    }
    
    
    //use yii\helpers\Json;
    public function actionJson(){
        $record = Invoice::findOne(19);
//        var_dump($record);
//        echo "<br><hr>";
//        echo JSON::encode($record);
//        echo "<br><hr>";
        $record = Invoice::find()
                ->where(['>','status',0])
                ->all();
        echo "[";
        foreach($record as $row)
        {
            echo JSON::encode($row) . ',';
        }
        echo "]";
    }
}










