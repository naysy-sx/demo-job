<?php

namespace app\controllers;

use app\models\db\Reviews;
use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}