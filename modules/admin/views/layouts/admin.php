<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\assets\AppAsset;
use app\models\personal\Personal;
use app\widgets\Alert;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;

AppAsset::register($this);

session_start();
$_SESSION['admin'] = 'editor';
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?=Yii::$app->language?>">
    <head>
        <meta charset="<?=Yii::$app->charset?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../../admin.css">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?=Html::encode($this->title)?></title>
        <?php $this->head() ?>
        <style>
            .container {
                width: 85% !important;
            }
        </style>
    </head>
    <body>
    <?php $this->beginBody() ?>

    <div class="wrap">
        <?php
        NavBar::begin([
            'brandLabel' => 'Админка',
            'brandUrl'   => Yii::$app->homeUrl,
            'options'    => [
                'class' => 'navbar-inverse navbar-fixed-top',
                'style' => 'text-align: right;',
            ],
        ]);

        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'items'   => [
                [
                    'label' => 'Материал',
                    'items' => [
                        [
                            'label' => 'Весь материал',
                            'url'   => ['/admin/hj-materials'],
                        ],
                        [
                            'label' => 'HR-Блог',
                            'url'   => ['/admin/blog'],
                        ],

                        [
                            'label' => 'Wiki-разделы',
                            'url'   => ['/admin/wiki-nav'],
                        ],
                        [
                            'label' => 'Wiki-посты',
                            'url'   => ['/admin/wiki-posts'],
                        ],
                        [
                            'label' => 'Видео',
                            'url'   => ['/admin/video'],
                        ],

                    ],
                ],
                [
                    'label' => 'Навигация',
                    'items' => [
                        [
                            'label' => 'Верхнее меню',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                    ],
                ],
                [
                    'label' => 'Настройки',
                    'items' => [
                        [
                            'label' => 'Права пользователей',
                            'url'   => ['/admin/user-rules'],
                        ],
                        [
                            'label' => 'Настройки системы',
                            'url'   => ['/admin/system-settings'],
                        ],
                        [
                            'label' => 'Настройки кеширования',
                            'url'   => ['/admin/system-settings'],
                        ],
                        [
                            'label' => 'Настройки CSS/JS сборщиков',
                            'url'   => ['/admin/system-settings'],
                        ],
                        [
                            'label' => 'Парсинг данных',
                            'url'   => ['/admin/parser'],
                        ],
                    ],
                ],
                [
                    'label' => 'Мониторинг',
                    'items' => [
                        [
                            'label' => 'Доступность сайтов',
                            'url'   => ['/admin/system'],
                        ],
                        [
                            'label' => 'Журнал активности',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'Логи ошибок',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'Логи доступа',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'Логи изменений материалов',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                    ],
                ],
                [
                    'label' => 'Продвижение',
                    'items' => [
                        [
                            'label' => 'Настройки префиксов',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'Настройки СЕО',
                            'url'   => ['/admin/system-settings'],
                        ],
                        [
                            'label' => 'Редактируемые МЕТА',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'Аналитика (?)',
                            'url'   => ['/admin/hj-up-nav'],
                        ],
                        [
                            'label' => 'SiteMap',
                            'url'   => ['/admin/sitemap'],
                        ],
                    ],
                ],
            ],
        ]);
        NavBar::end();
        ?>

        <div class="container" style="margin-top: 85px">
            <?=Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])?>
            <?=Alert::widget()?>
            <?=$content?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left"></p>
            <p class="pull-right"></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>