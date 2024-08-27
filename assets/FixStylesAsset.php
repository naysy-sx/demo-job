<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @package app\assets
 */
class FixStylesAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl  = '@web';
    public $css      = [
        'css/fix_style_assets.css',
    ];
    public $js       = [
    ];
    public $depends  = [
    ];
}
