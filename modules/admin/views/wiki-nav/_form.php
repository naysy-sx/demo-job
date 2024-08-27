<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiNav */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile('https://cdn.tiny.cloud/1/ez5bv8v1pb1d82ecl5oixxs4216oev3en2m128q3ufzoyu3w/tinymce/6/tinymce.min.js',
    ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(
    "tinymce.init({
      language: 'ru',
      //selector: '#htmleditor',
      selector: '.editor',
      plugins: 'inlinecss accordion anchor lists advlist code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount template',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | anchor code accordion inlinecss numlist bullist indent outdent | emoticons charmap | removeformat',
      images_upload_url: 'postAcceptor.php',
      automatic_uploads: false,
      
      
      template_cdate_format: '%m/%d/%Y : %H:%M',
      templates: '/tiny_templates/templates.php'
    });
",
    View::POS_READY,
    'htmleditor');

$this->registerJs(
    "function hideAdv() {
            $('.tox-notifications-container').hide();
        }

        setInterval(() => {
            tinymce.init({
                language: 'ru',
                selector: '.editor',
                plugins: 'inlinecss accordion anchor lists advlist code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | anchor code accordion inlinecss numlist bullist indent outdent | emoticons charmap | removeformat',
                images_upload_url: 'postAcceptor.php',
                automatic_uploads: false,
            });
        }, 1000);

        let timerId = setInterval(() => hideAdv(), 30);
        setTimeout(() => {
            clearInterval(timerId);
        }, 3000);",
    View::POS_READY,
    'hide-adv');

?>
<div class="wiki-nav-form">
    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'parent_id')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'color')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'image')->textInput(['maxlength' => true])?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <?=$form->field($model, 'other_link')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'access')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'weight')->textInput()?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'closed')->dropDownList([
                '0' => 'Открыта',
                '1' => 'Закрыта',
            ])?>
        </div>
    </div>

    <?=$form->field($model, 'description')->textarea([
        'rows'  => 6,
        'class' => 'form-control editor',
    ])?>

    <div class="form-group">
        <?=Html::submitButton('Save', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>
</div>