<?php

use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\HjMaterials */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile('/js/tinymce.min.js', // https://cdn.tiny.cloud/1/ez5bv8v1pb1d82ecl5oixxs4216oev3en2m128q3ufzoyu3w/tinymce/6/tinymce.min.js
    ['depends' => [\yii\web\JqueryAsset::class]]);
$this->registerJs(
    "tinymce.init({
      language: 'ru',
      //selector: '#htmleditor',
      selector: '.editor',
      plugins: 'inlinecss accordion anchor lists advlist code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount template powerpaste advcode code casechange searchreplace autolink directionality advcode visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export',
      toolbar: 'undo redo | blocks | bold italic underline strikethrough | link image media table | align lineheight | anchor code accordion inlinecss numlist bullist indent outdent | emoticons charmap | removeformat searchreplace', // help fontfamily fontsize
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
            $(document).find('.tox-notifications-container').hide();
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
//        setTimeout(() => {
//            clearInterval(timerId);
//        }, 3000);",
    View::POS_READY,
    'hide-adv');

$js = <<< ZZZZZ
(function ($) {    
    // добавление модулей по нажатию на кнопку "добавить блок"
    $(".add-block").click(function (e) {
        e.preventDefault();
        var type = $(this).data('type');
        
        $.get("/add-modules/", {type}, function (res) {
            $('.new-blocks').append(res);
        });

        // по просьбе Алисы - добавляем текстовый блок после любого добавленного блока
        // исключение - если уже был выбран текстовый блок
        //if (type != 'text'){
        //    setTimeout(function(){
        //        type = 'text';
        //        $.get("/add-modules/", {type}, function (res) {
        //            $('.new-blocks').append(res);
        //        });
        //    }, 50);

        //}
    });
    
    // поиск по статьям
    $(document).on("keyup", ".post-search", function () {
        var request = $(this).val();
        var currentblock = $(this).parent().find('.post-select-area');
        
        $.get("/admin/ajax/post-search/", {request}, function (res) {
            $(currentblock).html(res);
        });
    });
    
    // удаление добавляемых блоков
    $(document).on("click", ".del-module-line", function () {
        var line = $(this).parent().parent().parent();
        $(line).remove();
        
        console.log(line)
    });
    
    // проверка инпутов meta title и h1 на одинаковое содержимое
    function checkingInputsForDuplicates(){
        var meta_title = $('#blog-title').val();
        var h_title = $('#blog-h1').val();
        
        if (meta_title == h_title){
            $('.duplicates-error').text('Содержимое поля дублируется на странице. Пожалуйста,  введите другое значение');
        } else {
            $('.duplicates-error').html("&nbsp;");
        }
    }
    
    function checkingEmptyInputs(){
        var error = 1;
        var url = $('#blog-url').val();
        var h1 = $('#blog-h1').val();
        
        if (url != '' && h1 != ''){
            error = 0;
            $('#blog-publish').removeAttr('disabled');
            $('.saving-error').text('');
        } else {
            error = 1;
            $('.saving-error').html("&nbsp;&nbsp;&nbsp;Для публикации статьи - заполните обязательные поля (h1 и url)");
            $('#blog-publish').prop('checked', false);
            $('#blog-publish').attr('disabled', true);
        }
    }
    
    checkingInputsForDuplicates();
    
    // при вводе любого символа в поля - производим проверки
    $(document).on("keyup", "input", function () {
        // на повторные значения в инпутах
        checkingInputsForDuplicates();
        
        // на заполненность необходимых для публикации полей
        checkingEmptyInputs();
    });
    
    // [ajax] транслитерация
    $("#blog-h1").keyup(function (e) {
        e.preventDefault();
        var title = $(this).val();

        $.get("/admin/translit/", {title}, function (res) {
            $('#blog-url').val('hr-blog/' + res);
            
            // допом, чекаем урл-ы на повторы
            checkUrl();
        });
    });
    
    // ф-ция проверки на повторяющиеся URL-ы
    function checkUrl(){
        var url = $('#blog-url').val();
        var current_id = $('#blog-id').val();
        
        $.get("/admin/ajax/check-url-for-blog/", {url}, function (res) {
            if (res){
                if (res != current_id){
                    $('.url-err').html('Такой URL уже есть в базе!');
                }  else {
                    $('.url-err').html('');
                }
            } else {
                $('.url-err').html('');
            }
        });
    }
    
    checkUrl();
    
    // при изменении инпута с урл-ом - чекаем урл на повторы
    $("#blog-url").keyup(function (e) {
        checkUrl();
    });
    
    // автозаполнение полей у модуля картинок под разные устройства
    $(document).on("keyup", ".mod-imgs-desc-first", function () {
        var desc = $(this).val();
        $(this).parent().parent().find('.mod-imgs-t').find('.mod-imgs-desc').val(desc);
        $(this).parent().parent().find('.mod-imgs-m').find('.mod-imgs-desc').val(desc);
        
        console.log($(this).val());
    });
    $(document).on("keyup", ".mod-imgs-alt-first", function () {
        var alt = $(this).val();
        $(this).parent().parent().find('.mod-imgs-t').find('.mod-imgs-alt').val(alt);
        $(this).parent().parent().find('.mod-imgs-m').find('.mod-imgs-alt').val(alt);
    });
    $(document).on("keyup", ".mod-imgs-title-first", function () {
        var title = $(this).val();
        $(this).parent().parent().find('.mod-imgs-t').find('.mod-imgs-title').val(title);
        $(this).parent().parent().find('.mod-imgs-m').find('.mod-imgs-title').val(title);
    });

    setInterval(() => {
        $(".tox-dialog__iframe").on("load", () => {
            let iframeHead = $(".tox-dialog__iframe").contents().find("head");
            let iframeCSS = "<style>.tox-dialog--width-lg{height: 350px; margin-top: -200px}</style>";
            $(iframeHead).append(iframeCSS);
        });
    }, 500);

    $(document).on("click", ".select-post", function (e) {
        var id = $(this).data('id');
        
        $.get("/admin/ajax/get-post-for-module/", {id}, function (res) {
            $('.post-select-area').html(res);
            $('.post-select-area').css('border', '0');
            $('.post-select-area').css('height', 'auto');
        });
    });

    // загрузка файлов через ajax
    $(document).on("change", ".mod-imgs-file", function () {
        var this_input = $(this);
        var file_data = $(this).prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);

        $.ajax({
            url: '/admin/ajax-load-file/',
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (res) {
                var resdata = jQuery.parseJSON(res);

                if (resdata.status == 'ok') {
                    if (resdata.fileName != null) {
                        $(this_input).parent().find('.for-img-preview').html("<img src='../../../"+ resdata.filePath +"' style='width: 100%'>");
                        $(this_input).parent().find('.final-path').val(resdata.filePath);
                        $('.load-file-errors').text('');
                    }
                } else {
                    $('.load-file-errors').text(resdata.status);
                }
            }
        });
    });
    
    // расстановка картинок из инпутов
    $('.final-path').each(function(index, hidden_image_input) {
      var img_src = $(hidden_image_input).val();
      $(this).parent().find('.for-img-preview').html('<img src="../../../'+img_src+'" style="width: 100%;">');
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);

$this->registerCss(".one-module { margin: 25px 0 } .del-module-line { cursor: pointer }");

$model->created_at = date('Y-m-d', $model->created_at);
//$model->publish_date = date('Y-m-d', $model->publish_date);
?>

<style>

    .footer-btns {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: white;
        padding: 15px 25px 0;
        box-shadow: 0 0 11px -3px #a7a7a7;
        z-index: 9999999;
    }

    .bottom-space {
        margin-bottom: 120px
    }

    .f-container {
        width: 86%;
        margin: auto;
    }

    @media (max-width: 1380px) {
        .footer-btns {
            position: unset;
            padding: 0;
            box-shadow: 0 0 0 0;
        }

        .bottom-space {
            margin-bottom: 0
        }

        .f-container {
            width: 100%;
            margin: auto;
        }
    }

    .duplicates-error {
        color: red;
        margin-top: -16px;
        margin-bottom: -2px;
    }

    .url-err {
        color: red;
        margin-top: -16px;
        margin-bottom: -4px;
    }

    .saving-error {
        color: red;
    }

    .add-module_width-btn {
        width: 310px;
    }

    .form-control {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
        box-shadow: inset 0 4px 8px rgb(0 0 0 / 8%) !important;
    }

    .form-control:focus {
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075) !important;
        box-shadow: inset 0 0 0 rgb(0 0 0 / 8%) !important;
    }
</style>

<div class="blog-form">
    <?php $form = ActiveForm::begin(); ?>
    <?=$form->field($model, 'id')->hiddenInput()->label(false)?>

    <div class="row">
        <div class="col-md-5">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'category')->dropDownList([
                '1' => 'Методические материалы',
                '2' => 'Экспертные статьи',
                '3' => 'Видео и вебинары',
            ])?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'url')->textInput(['maxlength' => true])?>
            <div class="url-err"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="duplicates-error">&nbsp;</div>
            <?=$form->field($model, 'h1')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-7">
            <?=$form->field($model, 'meta_description')->textInput(['maxlength' => true])?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-7">
            <?=$form->field($model, 'small_description')?>
        </div>
        <div class="col-md-2">
            <?=$form->field($model, 'hide_small_desc_in_start_content')->dropDownList([
                    '0' => 'Отобразить после заголовка и перед началом контента',
                    '1' => 'Скрыть из самой статьи',
            ])?>
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'publish_date')->input('date')?>
        </div>
    </div>

    <?=$form->field($model, 'content')->textarea([
        'rows'  => 6,
        'id'    => 'htmleditor',
        'class' => 'editor',
    ])?>

    <?php
    if (isset($model['modules']) && mb_strlen($model['modules']) > 1) {
        $module_types = json_decode($model['modules']);
    } else {
        $module_types = [];
    }

    foreach ($module_types as $r_key => $module_type) {
        foreach ($module_type as $type => $module_data) {
            if ($type == 'textarea') {
                echo $this->render("///add-modules/text", [
                    'value' => $module_data[0],
                ]);
            }
            if ($type == 'wide_textarea') {
                echo $this->render("///add-modules/wide-text", [
                    'value' => $module_data[0],
                ]);
            }
            if ($type == 'hr') {
                echo $this->render("///add-modules/hr");
            }
            if ($type == 'images') {
                require_once "MobileDetect.php";
                $mobile       = new Mobile_Detect;
                $module_data  = (array)$module_data;
                $module_types = (array)$module_types;

                echo $this->render("///add-modules/images", [
                    'value' => $module_data,
                    'r_key' => $r_key,
                ]);
                // array_key_first()
            }
            if ($type == 'slider') {
                echo $this->render("///add-modules/slider", [
                    'value' => $module_data,
                    'r_key' => $r_key,
                ]);
                // array_key_first()
            }
            if ($type == 'video') {
                echo $this->render("///add-modules/video", [
                    'value' => $module_data,
                    'r_key' => $r_key,
                ]);
                // array_key_first()
            }
            if ($type == 'get-demo') {
                echo $this->render("///add-modules/get-demo", [
                    'value' => $module_data,
                    'r_key' => $r_key,
                ]);
                // array_key_first()
            }
            if ($type == 'post-module-ids') {
                $pm_id = $module_data[0];

                if (is_array($pm_id)) {
                    $pm_id = $module_data[0][0];
                }

                $pm_id = (int)$pm_id;

                echo $this->render("///add-modules/select-post-view", [
                    'value' => $pm_id,
                ]);
            }
        }
    }
    ?>

    <div class="new-blocks"></div>

    <a href="#spoiler-1" data-toggle="collapse" class="btn btn-success">Добавить блок</a>
    <div class="collapse mb-5" id="spoiler-1">
        <div class="well">

            <button class="btn btn-info add-block add-module_width-btn" data-type="text">Текстовый блок</button>
            <br><br>
            <!--            <button class="btn btn-info add-block add-module_width-btn" data-type="wide-text">Блок во всю ширину-->
            <!--            </button>-->
            <!--            <br><br>-->
            <button class="btn btn-info add-block add-module_width-btn" data-type="images">Разные картинки для разных
                                                                                           устройств
            </button>
            <br><br>
            <!--            <button class="btn btn-info add-block add-module_width-btn" data-type="hr">Разделитель</button>-->
            <!--            <br><br>-->
            <button class="btn btn-info add-block add-module_width-btn" data-type="select-post">Выбор статьи</button>
            <br><br>
            <button class="btn btn-info add-block add-module_width-btn" data-type="slider">Слайдер</button>
            <br><br>

            <button class="btn btn-info add-block add-module_width-btn" data-type="get-demo">Запрос демо</button>
            <br><br>
            <button class="btn btn-info add-block add-module_width-btn" data-type="video">Видео</button>
            <br><br>
            <button class="btn btn-info add-block add-module_width-btn" data-type="numbered_list">Красивый нумерованный
                                                                                                  список
            </button>
            <br><br>
        </div>
    </div>

    <div class="row" style="margin-top: 25px; margin-bottom: 25px">
        <div class="col-md-3">
            <?=$form->field($model, 'image')->fileInput()?>
            <br>
            <img src="../../../<?=$model['image']?>" style="width: 100%;">
        </div>
        <div class="col-md-3">
            <?=$form->field($model, 'up_images')->fileInput()?>
            <br>
            <img src="../../../<?=$model['up_images']?>" style="width: 100%;">
        </div>
        <div class="col-md-3"></div>
        <div class="col-md-3">
            <?=$form->field($model, 'author')->dropDownList([
                'alexey'     => 'Алексей Клочков',
                'anastasiya' => 'Анастасия Максимова',
                'alice'      => 'Алиса Ничкова',
                'marina'     => 'Марина Белова',
                'olga'       => 'Ольга Удальцова',
            ])?>
        </div>
        <!--        <div class="col-md-3">-->
        <!--            --><?php // echo$form->field($model, 'image_head_tablet')->fileInput(['disabled' => true])?>
        <!--            <br>-->
        <!--            <img src="--><?php // echo$model['image_head_tablet']?><!--" style="width: 100%;">-->
        <!--        </div>-->
        <!--        <div class="col-md-3">-->
        <!--            --><?php // echo$form->field($model, 'image_head_mobile')->fileInput(['disabled' => true])?>
        <!--            <br>-->
        <!--            <img src="--><?php // echo$model['image_head_mobile']?><!--" style="width: 100%;">-->
        <!--        </div>-->
    </div>

    <div class="bottom-space"></div>

    <div class="footer-btns">
        <div class="f-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group" style="display: flex; align-items: center; flex-wrap: nowrap;
    flex-direction: row; justify-content: flex-start;">
                        <?=Html::submitButton('Сохранить', ['class' => 'btn btn-success post-save'])?>
                        <div class="saving-error"></div>
                        <div style="margin: 20px 20px 0 30px">
                            <?=$form->field($model, 'publish')->checkbox();?>
                        </div>

                        <div style="margin: 4px 4px 0">
                            <a href="/<?=$model->url?>/" target="_blank"><b>Боевая ссылка</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>