<?php

namespace app\controllers;

use yii\web\Controller;

class PricesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}