<?php

namespace app\controllers;

use yii\web\Controller;

class PlatformController extends Controller
{
    public function actionSurveyFormats()
    {
        return $this->render('index');
    }
}