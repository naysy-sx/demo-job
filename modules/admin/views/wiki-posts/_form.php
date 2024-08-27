<?php

// пример . обсуждали статью https://happy-job.ru/hr-blog/nastavnicestvo-sotrudnikov/

use app\models\db\Video;
use app\models\db\WikiNav;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\db\WikiPosts */
/* @var $form yii\widgets\ActiveForm */

$wiki_nav = WikiNav::find()->asArray()->all();
$wiki_nav = ArrayHelper::map($wiki_nav, 'id', 'title');

$videos    = Video::find()->asArray()->all();
$videos    = ArrayHelper::map($videos, 'id', 'title');
$videos[0] = '(нет)';

// https://cdn.tiny.cloud/1/ez5bv8v1pb1d82ecl5oixxs4216oev3en2m128q3ufzoyu3w/tinymce/6/tinymce.min.js
$this->registerJsFile('/js/tinymce.min.js', ['depends' => [\yii\web\JqueryAsset::class]]);

//$this->registerJsFile('/js/tinyplugin.js', ['depends' => [\yii\web\JqueryAsset::class]]);
//$this->registerJsFile('/js/tinyicons.js', ['depends' => [\yii\web\JqueryAsset::class]]);
//$this->registerJsFile('/js/tinyru.js', ['depends' => [\yii\web\JqueryAsset::class]]);
//$this->registerJsFile('/js/tinymodel.js', ['depends' => [\yii\web\JqueryAsset::class]]);
//$this->registerJsFile('/js/tinytheme.js', ['depends' => [\yii\web\JqueryAsset::class]]);
//$this->registerJsFile('/js/tinyemojis.js', ['depends' => [\yii\web\JqueryAsset::class]]);

$this->registerJs(
    "tinymce.init({
      language: 'ru',
      //selector: '#htmleditor',
      selector: '.editor',
      plugins: 'preview  inlinecss accordion anchor lists advlist code anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount template',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | anchor code accordion inlinecss numlist bullist indent outdent | emoticons charmap | removeformat preview',
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
    // [ajax] транслитерация
    $("#wikiposts-h1").keyup(function (e) {
        e.preventDefault();
        var title = $(this).val();

        $.get("/admin/translit/", {title}, function (res) {
            $('#wikiposts-url').val('wiki/' + res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);

$jsblog = <<< ZZZZZ
(function ($) {    
    // добавление модулей по нажатию на кнопку "добавить блок"
    $(".add-block").click(function (e) {
        e.preventDefault();
        var type = $(this).data('type');
        
        $.get("/add-modules/", {type}, function (res) {
            $('.new-blocks').append(res);
        });

        // по просьбе Алисы - добавляем текстовый блок после любого добавленного блока
        // исключение - если и так был выбран текстовый блок для добавления
        // upd: пока отключаем
        //if (type != 'text'){
        //    if (type != 'text-grey'){
        //        setTimeout(function(){
        //            type = 'text';
        //            $.get("/add-modules/", {type}, function (res) {
        //                $('.new-blocks').append(res);
        //            });
        //        }, 50);
        //    }
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
      
      if (img_src.length > 1){
        $(this).parent().find('.for-img-preview').html('<div><div class="del-img">Удалить</div><img src="../../../'+img_src+'" style="width: 100%;"></div>');
      }
    });
    
    // удаление картинок
    $(document).on("click", ".del-img", function () {
        var img = $(this).parent();
        var imginput = $(this).parent().parent().parent().find('.final-path');

        $(img).remove();
        $(imginput).val('');
    });
        
    // изменение очередности блоков
    $(document).on("keyup", ".change-block-position", function () {
        var currentInput = $(this);
        var newNum = $(currentInput).val();
        var parentInput = $(currentInput).parent().parent().find('.col-md-11').find('.form-control');
        var type = $(parentInput).data('type');
        
        console.log(type);
        
        $(parentInput).attr('name', 'modules[' + newNum + '][' + type + '][]');
    });
})(jQuery);
ZZZZZ;

$this->registerJs($jsblog, yii\web\View::POS_READY);

$this->registerCss(".one-module { margin: 25px 0 } .del-module-line, .cut-div, .get-module-here { cursor: pointer }");


$this->registerJs(
    '$("document").ready(function(){
		$("#wiki-form").on("pjax:end", function() {
			$.pjax.reload({container:"#wiki-form"});
		});
    });'
);

// автосохранение
$this->registerJs(
    '
    // сохранение
    $(".form-control").keyup(function(){
        $.ajax({
            url: "/admin/ajax/auto-save/",
            type: "get",
            data: $("#w0").serialize(),
            success: function (res) {
                localStorage.setItem("formData", res);
            }
        });
    });
    
    // загрузка
    $(document).on("click", ".load-inputs", function (e) {
        e.preventDefault();
        var data = JSON.parse(localStorage.getItem("formData"));
		
        $.ajax({
            url: "/admin/ajax/auto-load/",
            type: "get",
            data: data,
            success: function (res) {
                var response = jQuery.parseJSON(res);
                
                if (response.status == "post_found"){
                    window.location.href = "/admin/wiki-posts/update/?id=" + response.id + "&load_inputs";
                } else {
                    var data = jQuery.parseJSON(localStorage.getItem("formData"));
                    
                    $.each(data, function(key, value) {
                       $("#wikiposts-" + key ).val(value); 
                    });
                }
            }
        });
    });
    '
);

// перемещение модулей
$this->registerJs('
    $(document).on("click", ".cut-div", function (e) {
        // подцепляем
        var module = $(this).parent().parent().parent();
    
        // сохраняем
        localStorage.setItem("saved_module", module.html());
        
        // удаляем
        $(module).remove();
    });
    
    $(document).on("click", ".get-module-here", function (e) {
        $(this).html(localStorage.getItem("saved_module"));
    });
');
?>
<style>
    .del-img {
        color: red;
        background-color: white;
        width: 100px;
        height: 45px;
        text-align: center;
        position: absolute;
        border-radius: 50px;
        margin-top: -20px;
        margin-right: -3px;
        right: 0;
        padding: 10px 0 0;
        cursor: pointer;
    }

    iframe {
        border: 1px white !important;
    }

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

    .f-container {
        width: 86%;
        margin: auto;
    }

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
<?php yii\widgets\Pjax::begin(['id' => 'wiki-form']) ?>
<?php $form = ActiveForm::begin(['options' => ['data-pjax' => true ]]); ?>
<div class="wiki-posts-form">
    <?=$form->field($model, 'id')->hiddenInput()->label(false)?>

    <div class="row">
        <div class="col-md-4">
            <?=$form->field($model, 'title')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'h1')->textInput(['maxlength' => true])?>
        </div>
        <div class="col-md-4">
            <?=$form->field($model, 'category_id')->dropDownList($wiki_nav)?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <?=$form->field($model, 'url')->textInput(['maxlength' => true])?>
    </div>
    <div class="col-md-4">
        <?=$form->field($model, 'meta_description')->textInput(['maxlength' => true])?>
    </div>
    <div class="col-md-4">
        <?=$form->field($model, 'weight')->textInput(['maxlength' => true])?>
    </div>


    <?php /* скрываем дату публикации из админки
    <div class="col-md-4">
        <?php
        if (!empty($model->publish_date)) {
            $model->publish_date = date('Y-m-d', $model->publish_date);
        }
        ?>
        <?=$form->field($model, 'publish_date')->input('date')?>
    </div>
    */ ?>
</div>

<!--    --><?php // echo $form->field($model, 'description')->textarea(['rows' => 6]) ?>

<?php echo $form->field($model, 'content')->textarea([
    'rows'  => 6,
    'id'    => 'htmleditor',
    'class' => 'editor',
]) ?>

<div style="text-align: center" class="paste-module-area">
    <hr>
    <span class="get-module-here">Вставить скопированный блок сюда</span>
    <hr>
</div>

<?php
if (isset($model['modules']) && mb_strlen($model['modules']) > 1) {
    $module_types = json_decode($model['modules']);
} else {
    $module_types = [];
}



// пересобираем
$module_types_tmp = $module_types;
unset($module_types);
$module_types = [];

foreach ($module_types_tmp as $key => $module_tmp){
    $module_types[$key] = (array)$module_tmp;
}

// сортируем
//ksort($module_types); // todo: с включением текстовы блоки улетают вниз (возможно, из-за отсутствия id/key у остальных блоков

//echo '<pre>';
//var_dump($module_types);
//echo '</pre>';

// выводим
foreach ($module_types as $r_key => $module_type) {
    foreach ($module_type as $type => $module_data) {
        if ($type == 'textarea') {
            echo $this->render("///add-modules/text", [
                'value' => $module_data[0],
                'r_key' => $r_key,
            ]);
        }

        if ($type == 'quote') {
            echo $this->render("///add-modules/quote", [
                'value' => $module_data[0],
                'r_key' => $r_key,
            ]);
        }


        if ($type == 'numbered-list') {
            echo $this->render("///add-modules/numbered_list", [
                'value' => $module_data[0],
            ]);
        }
        if ($type == 'textarea-grey') {
            echo $this->render("///add-modules/text-grey", [
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
        }
        if ($type == 'slider') {
            echo $this->render("///add-modules/slider", [
                'value' => $module_data,
                'r_key' => $r_key,
            ]);
        }
        if ($type == 'video') {
            echo $this->render("///add-modules/video", [
                'value' => $module_data,
                'r_key' => $r_key,
            ]);
        }
        if ($type == 'get-demo') {
            echo $this->render("///add-modules/get-demo", [
                'value' => $module_data,
                'r_key' => $r_key,
            ]);
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
        if ($type == 'calc-roi') {
            echo $this->render("///add-modules/calc-roi");
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
        <button class="btn btn-info add-block add-module_width-btn" data-type="images">Разные картинки для разных
                                                                                       устройств
        </button>
        <br><br>
        <button class="btn btn-info add-block add-module_width-btn" data-type="select-post">Выбор статьи</button>
        <br><br>
        <button class="btn btn-info add-block add-module_width-btn" data-type="slider">Слайдер</button>
        <br><br>
        <!--        <button class="btn btn-info add-block add-module_width-btn" data-type="get-demo">Запрос демо</button>-->
        <!--        <br><br>-->

        <button class="btn btn-info add-block add-module_width-btn" data-type="text-grey">Текст на серой подложке
        </button>
        <br><br>
        <button class="btn btn-info add-block add-module_width-btn" data-type="video">Видео</button>
        <br><br>

        <button class="btn btn-info add-block add-module_width-btn" data-type="numbered_list">Красивый нумерованный
                                                                                              список
        </button>
        <br><br>

        <button class="btn btn-info add-block add-module_width-btn" data-type="quote">Цитата</button>
        <br><br>

        <button class="btn btn-info add-block add-module_width-btn" data-type="calc-roi">Калькулятор ROI</button>
        <br><br>

    </div>
</div>

<div style="margin-bottom: 150px"></div>

<div class="footer-btns">
    <div class="f-container">
        <div class="row">
            <div class="col-md-9">
                <div class="form-group" style="display: flex; align-items: center; flex-wrap: nowrap;
    flex-direction: row; justify-content: flex-start;">
                    <?php // echo Html::submitButton('Сохранить', ['class' => 'btn btn-success'])?>

                    <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Добавить') : Yii::t('app', 'Сохранить'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-success']) ?>


                    <div style="margin: 20px 20px 0 30px">
                        <?=$form->field($model, 'active')->checkbox();?>
                    </div>

                    <div style="margin: 4px 4px 0">
                        <a href="/<?=$model->url?>/" target="_blank"><b>Боевая ссылка</b></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="text-align: right">
                <div class="form-group" style="padding-top: 15px">
                    <button class="btn btn-outline-success load-inputs">Восстановить данные</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>
<?php yii\widgets\Pjax::end() ?>
</div>
