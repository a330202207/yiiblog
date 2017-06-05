<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
//    public $enableCsrfValidation = false;
    /**
     * 登录页
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }

    /**
     * 登陆
     *
     * @return string
     */
    public function actionLogin()
    {

        if(Yii::$app->request->isAjax) {
            $model = new LoginForm();
            $model->load(Yii::$app->request->post());
            $model->login();
//            var_dump($model->errors);die;

            if($model->errors){

                return $this->render('roleadd',['model'=>$model,'error'=>$model->errors]);

            }else{

            }

            if ($model->load(Yii::$app->request->post()) && $model->login()) {
                return $this->goBack();
            } else {

                return $this->render('login', [
                    'model' => $model,
                ]);
            }
        }
    }


    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
