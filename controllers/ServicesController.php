<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Раздел Услуги
 * @package app\controllers
 */
class ServicesController extends Controller
{
    /**
     * Исследование вовлеченности
     *
     * @return string
     */
    public function actionEngagement()
    {
        return $this->render('engagement');
    }

    /**
     * Исследование лояльности и eNPS
     *
     * @return string
     */
    public function actionLoyalty()
    {
        return $this->render('loyalty');
    }

    /**
     * Консалтинг изменений
     *
     * @return string
     */
    public function actionConsulting()
    {
        return $this->render('consulting');
    }
}