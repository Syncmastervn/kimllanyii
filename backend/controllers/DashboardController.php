<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\BehaviModel;


//Use more _ KIEN CODE

//use yii\web\UploadedFile;
/**
 * Site controller
 */
class DashboardController extends Controller
{
    /**
     * @KIEN CODE
     */
    public $variable = '';
    public $sess;
    public $egment;
    public $behavior;
    public $isGuest;
    public $sql;
    public $behav;
    /**
     * @inheritdoc
     */
    public function actions()
    {
        //$this->isGuest = $this->behavior->isGuest();
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function init()
    {

        //$this->segment = Yii::$app->controller->id;
    }








    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        echo "This is index site";
    }

    /*
     * Tetsing code
     */

    public function actionTest()
    {
        //        $iLDelete = InvoiceLimit::find()
//                ->where(['invoiceID' => 177])
//                ->orderBy(['limitID' => SORT_DESC])
//                ->one();
//        
//        $iLDelete->delete();
//        
//        $invoiceLimit = InvoiceLimit::find()
//                ->where(['invoiceID' => 177])
//                ->orderBy(['limitID' => SORT_DESC])
//                ->all();
//        
//        //echo var_dump($invoiceLimit); 
//        foreach($invoiceLimit as $row)
//        {
//            echo $row['invoiceID'] . '-' . $row['renew_fee'] . '<br/>';
//        }

    }

    public function actionTestFiles()
    {
        //$files=\yii\helpers\FileHelper::findFiles(Yii::getAlias('@app').'/../uploads');
        $files = \yii\helpers\FileHelper::findFiles(Yii::getAlias('@app') . '/../uploads', ['only' => ['*.png', '*.jpg']]);
        $str = $files[0];
        $trim_from = strpos($str, 'uploads') + 8;
        $endArray = count($files);
        for ($i = 0; $i < $endArray; $i++) {
            echo substr($files[$i], $trim_from);
            echo "<br>";
        }
    }


    /*
     * BEHAVIOR testing @KIEN CODE
     */
    public function actionBehavi()
    {
        $b = new BehaviModel();
        echo $b->authority();
    }

    public function actionTwigy()
    {
        //ngày 22/3/3023 sửa trong file main-local.php trong common dòng thứ 19
        $link = "http:/" . Yii::getAlias('@web') . "/index.php?r=dashboard/invoice-extend-delete&id=";
        //Yii::$app->controller->renderPartial('partial_view');
        return $this->render('render.twig', [
            'username' => 'Andie',
            'link' => $link
        ]);
    }

    public function actionTwig_table()
    {

    }

    public function actionDesc()
    {
        $invoice = Invoice::find()
            ->where(['<=', 'billCode', 100])
            ->orderBy(['invoiceID' => SORT_DESC])
            ->one();
        var_dump($invoice);
    }

    public function actionCheckConstantly()
    {
        return $this->render('check_constantly');
    }

    public function actionApi()
    {
        $request = Yii::$app->request;
        switch ($request->get('data')) {
            //http://localhost/deposite/backend/web/index.php?r=dashboard/api&data=chkBillCode&billcode=120
            case 'chkBillCode':
                $billcode = $request->get('billcode');
                $dbResult = Invoice::find()
                    ->where(['billCode' => $billcode])
                    ->andWhere(['status' => 1])
                    ->asArray()
                    ->one();
                if ($dbResult != null) {
                    echo json_encode($dbResult);
                } else {
                    echo 'false';
                }
                break;
            //http://localhost/deposite/backend/web/index.php?r=dashboard/api&data=invoiceInfo&billcode=120
            case 'invoiceInfo':
                $billcode = $request->get('billcode');
                $result = Invoice::find()
                    ->where(['billCode' => $billcode])
                    ->orderBy('date_on DESC')
                    ->asArray()
                    ->One();
                if ($result != null) {
                    echo json_encode($result);
                } else {
                    echo 'false';
                }
                break;
        }
    }

}