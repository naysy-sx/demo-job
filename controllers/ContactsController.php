<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Контакты
 * @package app\controllers
 */
class ContactsController extends Controller
{
    /**
     * Клиентская поддержка
     *
     * @return mixed
     */
    public function actionSupport()
    {
        return $this->render('support');
    }

    /**
     * Отдел продаж
     *
     * @return mixed
     */
    public function actionSales()
    {
        return $this->render('sales');
    }
}