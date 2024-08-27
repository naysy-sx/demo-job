<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\db\Video */

$this->title                   = $model->title;
$this->params['breadcrumbs'][] =
    [
        'label' => 'Videos',
        'url'   => ['index'],
    ];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="video-view">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Update', [
            'update',
            'id' => $model->id,
        ], ['class' => 'btn btn-primary'])?>
        <?=Html::a('Delete', [
            'delete',
            'id' => $model->id,
        ], [
            'class' => 'btn btn-danger',
            'data'  => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method'  => 'post',
            ],
        ])?>
    </p>

    <?=DetailView::widget([
        'model'      => $model,
        'attributes' => [
            'id',
            'category_id',
            'datetime:datetime',
            'link_to_page',
            'link_to_video',
            'title',
            'tags',
            'description:ntext',
            'active',
            'meta:ntext',
            'vimeo',
        ],
    ])?>

    <?php

    // $model->link_to_video

    if (mb_strlen($model->vimeo) > 15) {
        $full_url = $model->vimeo;
        $video_id = end(explode('/', $full_url));
    } else {
        $video_id = $model->vimeo;
    }
    ?>
    <iframe src="https://player.vimeo.com/video/<?=$video_id?>?h=a953363e7a" width="100%"
            height="500" frameborder="0" style="border-radius: 20px"
            allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>
