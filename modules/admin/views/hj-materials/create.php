<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjMaterials */

$this->title = 'Добавление нового материала';
$this->params['breadcrumbs'][] = ['label' => 'HJ Материал', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hj-materials-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
