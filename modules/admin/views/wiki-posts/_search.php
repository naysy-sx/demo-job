<?php

use app\models\db\WikiNav;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiPostsSearch */
/* @var $form yii\widgets\ActiveForm */

$wiki_nav = WikiNav::find()->asArray()->all();
$wiki_nav = ArrayHelper::map($wiki_nav, 'id', 'title');
?>

<div class="wiki-posts-search" style="margin: 25px 0">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

<!--    --><?php // echo $form->field($model, 'id') ?>


    <?= $form->field($model, 'category_id')->dropDownList($wiki_nav)->label("Выборка по конкретному разделу") ?>

<!--    --><?php // echo $form->field($model, 'title') ?>

<!--    --><?php // echo $form->field($model, 'description') ?>

<!--    --><?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'active') ?>

    <div class="form-group">
        <?= Html::submitButton('Найти', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
