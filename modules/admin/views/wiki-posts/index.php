<?php

use app\models\db\WikiNav;
use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\WikiPostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Вики посты';
$this->params['breadcrumbs'][] = $this->title;

//change-weight

$js = <<< ZZZZZ
(function ($) {
    $(".change-weight").keyup(function (e) {
        e.preventDefault();
        var id = $(this).data('id');
        var weight = $(this).val();

        $.get("/admin/wiki-posts/change-weight/", {id, weight}, function (res) {
            console.log(res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);
?>
<style>
    .tab-i-r {
        margin-left: 25px;
    }

    .category-id {
        font-weight: 700;
        color: #00915a;
    }

    .post-id {
        font-weight: 400;
    }

    .hidden-post {
        color: red;
    }

    .category-id:hover, .post-id:hover {
        text-decoration: none;
        color: darkgreen;
    }
</style>
<div class="wiki-posts-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'columns'      => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'category_id',
            'title',
            //'description:ntext',
            //'content:ntext',
            //'active',

            [
                'label' => 'Статус',
                'format' => 'raw',
                'headerOptions' => ['style' => 'color:#337ab7; width: 100px'],
                'value' => function ($model) {
                    if ($model->active == 1){
                        return '<span style="color: green">Опубликована</span>';
                    } else {
                        return '<span style="color: #c70000">Скрыта</span>';
                    }
                },
            ],

//            ['class' => 'yii\grid\ActionColumn'],

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Управление',
                'headerOptions' => ['style' => 'color:#337ab7; width: 260px'],
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
                        $url ='/admin/wiki-posts/view/?id='.$model->id;
                        return $url;
                    }

                    if ($action === 'update') {
                        $url ='/admin/wiki-posts/update/?id='.$model->id;
                        return $url;
                    }
                    if ($action === 'delete') {
                        $url ='/admin/wiki-posts/delete/?id='.$model->id;
                        return $url;
                    }
                }
            ],

            [
                'label' => 'Сортировка',
                'headerOptions' => ['style' => 'color:#337ab7; width: 100px'],
                'filter' => false,
                'format' => 'raw',
                'value' => function ($model) {
                    return "<input type='text' class='form-control change-weight' data-id='{$model->id}' value='{$model->weight}'>";
                },
            ],
        ],
    ]);?>

    <div style="text-align: right; color: #399bc8; cursor:pointer;" onclick="document.location.reload()">
        Перестроить
    </div>

    <div style="margin-bottom: 25px"></div>
    <h3>Категории:</h3>

    <?php
    $categories = WikiNav::find()->asArray()->all();

    foreach ($categories as $category) {
        ?>
        <a data-toggle="collapse" href="#collapseExample<?=$category['id']?>" aria-expanded="false"
           aria-controls="collapseExample<?=$category['id']?>" class="category-id">
            <?=$category['title']?><br>
        </a>

        <div class="collapse" id="collapseExample<?=$category['id']?>">
            <div class="card card-block tab-i-r">
                <?php
                $posts = \app\models\db\WikiPosts::find()->where(['category_id' => $category['id']])->asArray()->all();

                foreach ($posts as $post) { ?>
                    <a href="/admin/wiki-posts/update/?id=<?=$post['id']?>"
                       class="post-id <?php if ($post['active'] == 0) {
                           echo ' hidden-post';
                       } ?>"><?=$post['title']?></a><br>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
    <div style="margin-bottom: 125px"></div>
</div>
