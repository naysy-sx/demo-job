<?php

namespace app\controllers;

use yii\web\Controller;

class MetodikaController extends Controller
{
    public function actionNauchnoeObosnovanieMetodiki()
    {
        return $this->render('nauchnoe-obosnovanie-metodiki');
    }
}