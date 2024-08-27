<?php

namespace app\controllers;

use yii\web\Controller;

class HappyIndexController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}