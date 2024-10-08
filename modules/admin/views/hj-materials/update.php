<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjMaterials */

$this->title = 'Редактирование материала: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'HJ Материалы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование';
?>
<div class="hj-materials-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
