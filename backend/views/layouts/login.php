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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>后台登录</title>
	<?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrapper">
	<div class="content">
		<div id="form_wrapper" class="form_wrapper">
			<form class="login active">
				<h3>Login</h3>
				<div>
					<label>用户名:</label>
					<input type="text" />
				</div>
				<div>
					<label>密码: <a href="#" rel="forgot_password" class="forgot linkform">忘记密码</a></label>
					<input type="password" />
				</div>
				<div class="bottom">
					<div class="remember"><input type="checkbox" /><span>记住我</span></div>
					<input type="submit" value="Login"></input>
					<!-- <a href="#" rel="register" class="linkform">注册</a> -->
					<div class="clear"></div>
				</div>
			</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>