<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\WikiNavSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Wiki Navs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wiki-nav-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Wiki Nav', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'r_id',
            //'parent_id',
            'title',
            'color',
            //'image',
            'other_link',
            //'access',
            //'description:ntext',
            //'weight',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
