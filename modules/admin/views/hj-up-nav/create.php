<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjUpNav */

$this->title = 'Добавление нового пункта';
$this->params['breadcrumbs'][] = ['label' => 'HJ Верхнее меню', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hj-up-nav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
