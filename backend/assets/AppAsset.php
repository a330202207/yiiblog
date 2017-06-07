<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/css/site.css',
        'static/h-ui/css/H-ui.min.css',
        'static/h-ui.admin/css/H-ui.admin.css',
        'static/Hui-iconfont/1.0.8/iconfont.css',
        'static/h-ui.admin/skin/default/skin.css',
        'static/h-ui.admin/css/style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
