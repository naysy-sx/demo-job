<?php
$js = <<< ZZZZZ
(function ($) {
    $('.console').hide();

    $(".start").click(function (e) {
        e.preventDefault();
        $('.console').show();
        $('.console-status').text('Обработка...');
        
        $.get("/admin/system/request/", {}, function (res) {
            $('.console-status').text('');
            $('.console-line').append(res);
        });
    });
    
    $(".log").click(function (e) {
        e.preventDefault();
        $('.console').show();
        $('.console-status').text('Обработка...');
        
        $.get("/admin/system/get-log/", {}, function (res) {
            $('.console-status').text('');
            $('.console-line').append(res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);
?>

<style>
    .console{
        margin-top: 25px;
        background-color: black;
        width: 100%;
        color: limegreen;
        padding: 10px 5px;
    }
</style>

<a href="#!" class="start">Запустить проверку</a><br>
<a href="#!" class="log">Получить лог</a><br>

<div class="console">
<div class="console-status"></div>
<div class="console-line"></div>
</div>