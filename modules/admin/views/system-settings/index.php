<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Системные настройки';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .card{
        background: #e9f6ed;
        border-radius: 10px;
        padding: 15px;
    }
</style>
<div class="hj-up-nav-index">
    <h1><?=Html::encode($this->title)?></h1>
    <code>Внимание! Боевые настройки оборудования!</code>

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <?=$form->field($model, 'cache')->dropDownList([
                        0 => 'Выключен',
                        1 => 'Включен',
                ])?>

                <?=$form->field($model, 'status_enabled')->dropDownList([
                    1 => 'Включен',
                    0 => 'Выключен',
                ])?>

                <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success settings-save'])?>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>

    <?php ActiveForm::end(); ?>
</div>
