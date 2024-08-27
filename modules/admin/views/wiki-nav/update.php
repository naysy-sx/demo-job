<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiNav */

$this->title = 'Update Wiki Nav: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Wiki Navs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wiki-nav-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
