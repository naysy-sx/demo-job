<?php

namespace app\controllers;

use yii\web\Controller;

class SurveyFormatsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}