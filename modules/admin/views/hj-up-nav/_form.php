<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjUpNav */
/* @var $form yii\widgets\ActiveForm */

$navs = \app\models\db\HjUpNav::find()->asArray()->all();
$navs = ArrayHelper::map($navs, 'id', 'name');
$navs[0] = '(родительский)';
?>

<div class="hj-up-nav-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?=$form->field($model, 'name')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-6">
            <?=$form->field($model, 'parent_id')->dropDownList($navs)?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'link')->textInput()?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'weight')->textInput()?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'icons')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-12">
            <?=$form->field($model, 'description')->textInput()?>
        </div>
    </div>

    <div class="form-group">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
