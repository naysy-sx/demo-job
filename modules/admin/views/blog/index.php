<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\BlogSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Блог';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'columns'      => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'category',
            'title',
            //'small_description:ntext',
            //'content:ntext',
            //'up_background',
            //'image',
            //'author',
            //'created_at',
            //'updated_at',
            //'status',
            //'last_edits:ntext',

            'publish_date:date',
            //'tags',

//            [
//                'label'  => 'Url',
//                'format' => 'html',
//                'value'  => function ($model) {
//                    return end(explode('/', $model->url));
//                },
//            ],

            [
                'label'  => 'Категория',
                'format' => 'html',
                'value'  => function ($model) {
                    if ($model->tags == 'video') {
                        return 'Видео';
                    } elseif ($model->tags == 'expert_articles'){
                        return 'Экспертные статьи';
                    } elseif ($model->tags == 'news'){
                        return 'Методические материалы';
                    }
                },
            ],

            //'publish',

            [
                'label'  => 'Статус',
                'format' => 'html',
                'value'  => function ($model) {
                    if ($model->publish) {
                        return '<span style="color: green">Опубликовано</span>';
                    }

                    return '<span style="color: #f59500">Скрыто</span>';
                },
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Управление',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{open} &nbsp; {update}',
                'buttons' => [
                    'open' => function ($url, $model) {
                        //return Html::a('<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Blue_globe_icon.svg/750px-Blue_globe_icon.svg.png" style="height: 13px; margin-top: -3px;">', $url, [
                        return Html::a('<button class="btn btn-warning">Посмотреть</button>', $url, [
                            'title' => Yii::t('app', 'open'),
                        ]);
                    },

                    'view' => function ($url, $model) {
                        return Html::a('<button class="btn btn-info">Техничка</button>', $url, [
                            'title' => Yii::t('app', 'view'),
                        ]);
                    },

                    'update' => function ($url, $model) {
                        return Html::a('<button class="btn btn-success">Редактировать</button>', $url, [
                            'title' => Yii::t('app', 'update'),
                        ]);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('app', 'delete'),
                        ]);
                    }

                ],
                'urlCreator' => function ($action, $model, $key, $index) {
                    if ($action === 'open') {
                        $url ='/'.$model->url . '/';
                        return $url;
                    }

                    if ($action === 'view') {
                        $url ='/admin/blog/view/?id='.$model->id;
                        return $url;
                    }

                    if ($action === 'update') {
                        $url ='/admin/blog/update/?id='.$model->id;
                        return $url;
                    }
                    if ($action === 'delete') {
                        $url ='/admin/blog/delete/?id='.$model->id;
                        return $url;
                    }
                }
            ],


            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]);?>


</div>
