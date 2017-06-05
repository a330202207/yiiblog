<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * 后台登录页面资源
 */
class LoginAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/style.css',
    ];
    public $js = [
        'static/js/jquery.min.js',
        'static/js/layer/layer.js',
    ];
}
