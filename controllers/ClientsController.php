<?php

namespace app\controllers;

use app\models\db\Video;
use yii\web\Controller;

/**
 * @package app\controllers
 */
class ClientsController extends Controller
{
    /**
     * @return string
     */
    public function actionReviews()
    {
        return $this->render('reviews');
    }

    /**
     * @return string
     */
    public function actionBenchmarks()
    {
        return $this->render('benchmarks');
    }
}