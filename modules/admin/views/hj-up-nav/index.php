<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\db\HjUpNavSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'HJ Верхнее меню';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hj-up-nav-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить пункт меню', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'parent_id',
            'name',
            'link',
            'icons',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
