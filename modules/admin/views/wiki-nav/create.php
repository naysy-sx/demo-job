<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiNav */

$this->title = 'Create Wiki Nav';
$this->params['breadcrumbs'][] = ['label' => 'Wiki Navs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wiki-nav-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
