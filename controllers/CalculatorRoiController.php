<?php

namespace app\controllers;

use yii\web\Controller;

class CalculatorRoiController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}