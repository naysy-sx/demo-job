<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiPosts */

$this->title = 'Добавление поста';
$this->params['breadcrumbs'][] = ['label' => 'Вики посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wiki-posts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
