<?php

use app\models\personal\Editor;

$this->title = 'Админка';

$editor = new Editor;
$editor->login();

$js = <<< ZZZZZ
(function ($) {
    // [ajax] транслитерация
    $(".get-sites").click(function (e) {
        e.preventDefault();
        $('#open-sites').html('Обработка...');

        $.get("/admin/ip/", {}, function (res) {
            $('#open-sites').html(res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);
?>
<style>
    .adm-card {
        box-shadow: 0 0 14px -4px black;
        border-radius: 10px;
        padding: 10px 25px;
    }

    .w-100 {
        width: 100%;
    }

    .mt15{
        margin-top: 15px;
    }
</style>
<div class="row">
    <div class="col-md-6">
        <div class="adm-card">
            <h4>Статистика</h4>
            <br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="adm-card">
            <h4>Отчеты</h4>
            <br>
        </div>
    </div>
    <div class="col-md-2">
        <div class="adm-card">
            <h4>Управление</h4>
            <div id="open-sites">
                <button class="btn btn-success w-100 get-sites">Открыть dev-сайты</button>
            </div>
<!--            <div id="open-posts">-->
<!--                <button class="btn btn-success w-100 get-sites mt15">Открыть статьи</button>-->
<!--            </div>-->
        </div>
    </div>
</div>
