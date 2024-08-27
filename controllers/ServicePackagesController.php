<?php

namespace app\controllers;

use app\models\db\Video;
use yii\web\Controller;

/**
 * @package app\controllers
 */
class ServicePackagesController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}