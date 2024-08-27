<?php

$params = require __DIR__ . '/params.php';
$db     = require __DIR__ . '/db.php';

// подключение роутов
require_once "../simple_classes/Bd.php";
$urls_array = (new Bd)->getAllUrls();

// подключение настроек (для моделей, которые стартуют раньше всей системы)
require_once "../simple_classes/MainSettings.php";

$config = [
    'id'         => 'basic',
    'name'       => 'HappyJob',
    'basePath'   => dirname(__DIR__),
    'bootstrap'  => ['log'],
    'language'   => 'ru',
    'aliases'    => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'components' => [
        'request'      => [
            'cookieValidationKey' => 'd5784sknk37945sghbk6dfgyk3d8stnt5835',
        ],
        'cache'        => [
            'class' => 'yii\caching\FileCache',
        ],
        'user'         => [
            'identityClass'   => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer'       => [
            'class'            => 'yii\swiftmailer\Mailer',
            'useFileTransport' => true,
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => [
                        'error',
                        'warning',
                    ],
                ],
            ],
        ],
        'db'           => $db,
        'urlManager'   => [
            'class'           => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
            'suffix'          => '/',
            'rules'           => $urls_array,
        ],
    ],
    'modules'    => [
        'admin' => [
            'class' => 'app\modules\admin\Module',
        ],
    ],
    'params'     => $params,
];

if (YII_ENV_DEV) { // 1 OR YII_ENV_DEV
    /** debug включаем только на dev-е */
    // определяем домен
    $server_name        = $_SERVER["SERVER_NAME"];
    $server_name_prefix = explode('.', $server_name)[0];

    // если в домене есть new - включаем дэбаг для всех
    if ($server_name_prefix == 'new') {
        $config['bootstrap'][]      = 'debug';
        $config['modules']['debug'] = [
            'class'      => 'yii\debug\Module',
            'allowedIPs' => [
                '*',
                '::1',
            ],
        ];
    } else {
        $config['bootstrap'][]      = 'debug';
        $config['modules']['debug'] = [
            'class' => 'yii\debug\Module',
            //'allowedIPs' => ['62.231.18.105', '::1'],
        ];
    }

    $config['bootstrap'][]    = 'gii';
    $config['modules']['gii'] = [
        'class'      => 'yii\gii\Module',
        'allowedIPs' => [
            '109.74.135.190',
            '::1',
        ],
    ];
}

return $config;
