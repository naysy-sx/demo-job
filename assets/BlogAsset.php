<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @package app\assets
 */
class BlogAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'static/css/swiper-bundle.min.css',
        'static/css/fancybox.css',
        'static/fonts/stylesheet.css',
        'static/css/reset.css',
        'static/css/blog.css'
    ];
    public $js       = [
	    'static/js/swiper-bundle.min.js',
	    'static/js/fancybox.umd.js',
	    'static/js/imask.min.js',
	    'static/js/parsley.min.js',
	    'static/js/common.js'
    ];
    public $depends  = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
