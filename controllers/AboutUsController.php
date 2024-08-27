<?php

namespace app\controllers;

use yii\web\Controller;

class AboutUsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWork()
    {
        return $this->render('work');
    }
}