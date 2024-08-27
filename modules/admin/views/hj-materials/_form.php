<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjMaterials */
/* @var $form yii\widgets\ActiveForm */

$navs = \app\models\db\HjUpNav::find()->asArray()->all();
$navs = ArrayHelper::map($navs, 'id', 'name');
$navs[0] = '(не привязан к меню)';

$this->registerJsFile('https://cdn.tiny.cloud/1/ez5bv8v1pb1d82ecl5oixxs4216oev3en2m128q3ufzoyu3w/tinymce/6/tinymce.min.js',
    ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(
    "tinymce.init({
      language: 'ru',
      selector: '#htmleditor',
      plugins: 'inlinecss accordion anchor lists advlist code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | anchor code accordion inlinecss numlist bullist indent outdent | emoticons charmap | removeformat',
    });",
    View::POS_READY,
    'htmleditor');

$this->registerJs(
    "function hideAdv() {
            $('.tox-notifications-container').hide();
        }

        let timerId = setInterval(() => hideAdv(), 30);
        setTimeout(() => {
            clearInterval(timerId);
        }, 3000);",
    View::POS_READY,
    'hide-adv');
?>
<style>
    .drop-parent {
        display: flex;
        font-family: sans-serif;
        font-weight: bold;
    }

    .drop-origin {
        flex-basis: 100%;
        flex-grow: 1;
        padding: 10px;
    }

    .drop-draggable {
        background-color: #e8e8e8;
        font-weight: normal;
        padding: 30px 25px;
        margin: 15px 0;
        border-radius: 10px;
    }

    .drop-dropzone {
        background-color: #6DB65B;
        flex-basis: 100%;
        flex-grow: 1;
        padding: 10px;
    }
</style>

<div class="hj-materials-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-6">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-6">
            <?=$form->field($model, 'link')->textInput(['maxlength' => true])?>
        </div>
    </div>

    <?=$form->field($model, 'content')->textarea([
        'rows' => 6,
        'id'   => 'htmleditor',
    ])?>

    <div class="row">
<!--        <div class="col-md-6">-->
<!--            --><?php // echo$form->field($model, 'nav_data')->dropDownList($navs)?>
<!--        </div>-->
        <div class="col-md-6">
            <?=$form->field($model, 'active')->dropDownList([
                '1' => 'Активно, видно на сайте',
                '0' => 'Неактивно, скрыто',
            ])?>
        </div>
    </div>


<!--    <a class="btn btn-warning" data-toggle="collapse" href="#blocks" aria-expanded="false"-->
<!--       aria-controls="blocks">-->
<!--        Настройки отображения блоков-->
<!--    </a>-->
<!---->
<!--    <div class="collapse light-bd" id="blocks">-->
<!--        <div class="row">-->
<!--            <div class="col-md-3"></div>-->
<!--            <div class="col-md-6">-->
<!--                <label>-->
<!--                    <input type="checkbox">-->
<!--                    Включить внешний контейнер (container mainc)-->
<!--                </label>-->
<!--                <br><br>-->
<!--                <div class="site-pseudo-content">-->
<!--                    <div class="spc-block" draggable="false" style="background-color: #f2a7a7">[ Фиксированная шапка ]-->
<!--                    </div>-->
<!---->
<!--                    <div style="min-height: 150px; width: 100%; background-color: gainsboro"-->
<!--                         ondragover="onDragOver(event);"-->
<!--                         ondrop="onDrop(event);">-->
<!---->
<!--                    </div>-->
<!---->
<!--                    <div class="spc-block" draggable="true">[ Текстовый контент ]</div>-->
<!--                    <div class="spc-block" draggable="true">[ Модуль галереи ]</div>-->
<!--                    <div class="spc-block" draggable="true">[ Нижний ряд ссылок]</div>-->
<!--                    <div class="spc-block" draggable="false" style="background-color: #f2a7a7">[ Фиксированный футер ]-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3"></div>-->
<!---->
<!--            <div class="col-md-12">-->
<!--                <a class="btn btn-info" data-toggle="collapse" href="#add-module" aria-expanded="false"-->
<!--                   aria-controls="add-module">-->
<!--                    Добавить модуль-->
<!--                </a>-->
<!---->
<!--                <div class="collapse" id="add-module" style="margin-top: 15px">-->
<!--                    <div class="row">-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Слайдер-карусель<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Полноформатный банер<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Форма обратной связи<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Графики / статистика<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Видео<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="col-md-4">-->
<!--                            <div class="module-view" draggable="true">-->
<!--                                Настраиваемый модуль<br>-->
<!--                                <a href="#!">Настроить</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--    -->
<!--    <div class="drop-parent">-->
<!--        <div class="drop-origin">-->
<!--            <div id="draggable-1"-->
<!--                    class="drop-draggable"-->
<!--                    draggable="true"-->
<!--                    ondragstart="onDragStart(event);">-->
<!--                Блок со слайдером-->
<!--                <br>-->
<!--                <a href="#!">Настроить</a>-->
<!--            </div>-->
<!--            <div-->
<!--                    id="draggable-2"-->
<!--                    class="drop-draggable"-->
<!--                    draggable="true"-->
<!--                    ondragstart="onDragStart(event);"-->
<!--            >-->
<!--                Галерея-->
<!--                <br>-->
<!--                <a href="#!">Настроить</a>-->
<!--            </div>-->
<!--            <div-->
<!--                    id="draggable-3"-->
<!--                    class="drop-draggable"-->
<!--                    draggable="true"-->
<!--                    ondragstart="onDragStart(event);"-->
<!--            >-->
<!--                Текстовый блок-->
<!--                <br>-->
<!--                <a href="#!">Настроить</a>-->
<!--            </div>-->
<!--            <div-->
<!--                    id="draggable-4"-->
<!--                    class="drop-draggable"-->
<!--                    draggable="true"-->
<!--                    ondragstart="onDragStart(event);"-->
<!--            >-->
<!--                Картинка во всю ширину страницы-->
<!--                <br>-->
<!--                <a href="#!">Настроить</a>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="drop-dropzone"-->
<!--                ondragover="onDragOver(event);"-->
<!--                ondrop="onDrop(event);">-->
<!--        </div>-->
<!--    </div>-->









    <div class="form-group" style="margin-top: 15px">
        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

<script>
    function onDragStart(event) {
        event
            .dataTransfer
            .setData('text/plain', event.target.id);

        event
            .currentTarget
            .style
            .backgroundColor = '#b7e6b8';
    }

    function onDragOver(event) {
        event.preventDefault();
    }

    function onDrop(event) {
        var newzone = event.target;

        console.log(newzone);

        const id = event
            .dataTransfer
            .getData('text');

        draggableElement = document.getElementById(id);

        const dropzone = event.target;
        dropzone.appendChild(draggableElement);
        event
            .dataTransfer
            .clearData();
    }
</script>