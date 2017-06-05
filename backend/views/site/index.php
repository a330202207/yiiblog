<?php
use backend\assets\LoginAsset;
use yii\helpers\Html;

LoginAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>后台登录</title>
    <?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="login">
        <h2></h2>
        <div class="login-top">
            <h1>后台系统登录</h1>
            <?= Html::input('text', 'username', '', ['id' => 'username', 'placeholder' => '用户名']) ?>
            <?= Html::input('password', 'password', '', ['id' => 'password', 'placeholder' => '密码']) ?>
            <div class="forgot">
                <!--	    	<a href="#">forgot Password</a>-->
            </div>
        </div>
        <div class="login-bottom">
            <input type="hidden" name="YII_CSRF_TOKEN" id="csrf" value="<?=Yii::$app->request->getCsrfToken() ?>">
            <?= Html::input('submit', '', '登录', ['id' => 'login']) ?>
        </div>
    </div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
<script type="text/javascript">
    $("#login").click(function () {
        var username = $("#username").val();
        var password = $("#password").val();
        var csrfToken = $("#csrf").val();

        /*        if (!username) {
         layer.msg('用户名不能为空！', {icon: 2});
         } else if(!password) {
         layer.msg('密码不能为空！', {icon: 2});
         } else {

         }*/

        var data = {'LoginForm[username]': username, 'LoginForm[password]': password, '_csrf-backend': csrfToken};
        $.ajax({
            type: "post",
            url: 'site/login',
            data: data,
            success: function (res) {
                console.log(res);
                /*                if (res == 1) {
                 layer.msg('登录成功', {icon: 1});
                 } else {
                 layer.msg('用户名或密码错误', {icon: 2});
                 }*/
            }
        });
    });
</script>
