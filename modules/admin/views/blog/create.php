<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Blog */

$this->title = 'Добавление поста';
$this->params['breadcrumbs'][] = ['label' => 'Блог', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
