<?php

namespace app\controllers;

use yii\web\Controller;

class HrBrandController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}