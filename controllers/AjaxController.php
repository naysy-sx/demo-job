<?php

namespace app\controllers;

use yii\web\Controller;

class AjaxController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        return json_encode(['status' => 'Контроллер-обработчик']);
    }

    public function actionForm()
    {
        return 'Обработчик формы';
    }
}