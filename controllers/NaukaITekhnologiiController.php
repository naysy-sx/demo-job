<?php

namespace app\controllers;

use yii\web\Controller;

class NaukaITekhnologiiController extends Controller
{
    public function actionVoprosyInformacionnoyBezopasnosti()
    {
        return $this->render('voprosy-informacionnoy-bezopasnosti');
    }
}