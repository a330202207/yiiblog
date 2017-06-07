<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{
    public function beforeAction($action)
    {
        $loginStatus = $this->checkLoginStatus();
        if (!$loginStatus && !in_array($action->uniqueId, $this->allowAllAction)) {
            if (Yii::$app->request->isAjax) {
                $this->renderJSON([], "未登录,请返回用户中心", -302);
            } else {
                $this->redirect(UrlService::buildUrl("/user/login"));//返回到登录页面
            }
            return false;
        }
    }

    public function checkLoginStatus()
    {
        $request = Yii::$app->request;
        $cookies = $request->cookies;
        $auth_cookie = $cookies->get($this->auth_cookie_name);

        if (!$auth_cookie) {
            return false;
        }

        list($auth_token, $uid) = explode("#", $auth_cookie);

        if (!$auth_token || !$uid) {
            return false;
        }

        if ($uid && preg_match("/^\d+$/", $uid)) {
            $userinfo = User::findOne(['id' => $uid]);
            if (!$userinfo) {
                return false;
            }
            //校验码
            if ($auth_token != $this->createAuthToken($userinfo['id'], $userinfo['name'], $userinfo['email'], $_SERVER['HTTP_USER_AGENT'])) {
                return false;
            }
            $this->current_user = $userinfo;
            $view = Yii::$app->view;
            $view->params['current_user'] = $userinfo;
            return true;
        }
        return false;
    }

}