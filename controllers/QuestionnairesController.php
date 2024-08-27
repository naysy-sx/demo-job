<?php

namespace app\controllers;

use yii\web\Controller;

class QuestionnairesController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}