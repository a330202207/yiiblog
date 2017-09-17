<?php
use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use backend\components\NavWidget;
use backend\components\HeaderWidget;
use backend\components\FooterWidget;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<div class="layui-layout layui-layout-admin">
<?php $this->beginBody() ?>
<!--头部挂件开始-->
<?= HeaderWidget::widget(); ?>
<!--头部挂件结束-->

<!--菜单挂件开始-->
<?= NavWidget::widget(); ?>
<!--菜单挂件结束-->

<!--中间的内容开始-->
<div class="layui-body">
    <!-- 内容主体区域 -->
    <div style="padding: 15px;">内容主体区域</div>
</div>
<!--中间的内容结束-->
<?= FooterWidget::widget(); ?>

</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
