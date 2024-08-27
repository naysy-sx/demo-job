<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Sitemap';
$this->params['breadcrumbs'][] = $this->title;

$js = <<< ZZZZZ
(function ($) {
    // [ajax] подгрузка файла
    $(".get-file").click(function (e) {
        e.preventDefault();

        $.get("/admin/sitemap/get-file/", function (res) {
            $('.sitemap-xml').html(res);
        });
    });
})(jQuery);
ZZZZZ;

$this->registerJs($js, yii\web\View::POS_READY);
?>
<style>
    .card {
        background: #e9f6ed;
        border-radius: 10px;
        padding: 15px;
    }
    .m-b-25{
        margin-bottom: 25px;
    }
</style>
<div class="hj-up-nav-index">
    <h1><?=Html::encode($this->title)?></h1>
    <code>Внимание! Перезапускать только по команде СЕО-шников!</code><br><br>

    <a class="btn btn-primary get-file" data-toggle="collapse" href="#viewfile-area" aria-expanded="false"
       aria-controls="viewfile-area">
        Текущая конфигурация
    </a>
    <div class="collapse m-b-25" id="viewfile-area">
        <div class="card card-block">
            <div class="sitemap-xml">Загрузка...</div>
        </div>
    </div>

    <a class="btn btn-danger" href="/admin/sitemap/generate-file/">
        Пересобрать файл
    </a>

    <br><br>
</div>
