<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\HjMaterialsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'HJ Материал';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hj-materials-index">

    <h1><?=Html::encode($this->title)?></h1>

    <p>
        <?=Html::a('Добавить материал', ['create'], ['class' => 'btn btn-success'])?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?=GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'columns'      => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            //'nav_data',
            //'content:ntext',
            //'created_at',
            //'updated_at',
            //'active',
            //'author',
            //'last_edits',
            'link',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);?>


</div>
