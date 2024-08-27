<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->context->layout = 'error';
$this->title = $name;
?>

<div class="b-grey">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="title-page">
                    <span><?= Html::encode($this->title) ?></span>
                    <?= nl2br(Html::encode($message)) ?>
                </h1>
                <a href="#" onclick="history.go(-1)" class="btn btn-back"> <i class="customicon-long-arrow-left"> </i>
                    Вернуться </a>
            </div>
            <div class="col-md-6"><img src="/img/p/error/development.svg" class="img-fluid" alt="" title=""></div>
        </div>
    </div>
</div>