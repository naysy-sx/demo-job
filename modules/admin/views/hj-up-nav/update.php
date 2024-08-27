<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjUpNav */

$this->title = 'Редактирование пункта: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'HJ Верхнее меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="hj-up-nav-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
