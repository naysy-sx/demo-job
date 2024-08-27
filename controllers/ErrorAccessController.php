<?php

namespace app\controllers;

use yii\web\Controller;

class ErrorAccessController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        echo 'Доступ закрыт';
        exit;
    }
}