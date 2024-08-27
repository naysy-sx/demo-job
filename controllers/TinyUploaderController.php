<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Обработчик загрузки картинок у редактора
 * @package app\controllers
 */
class TinyUploaderController extends Controller
{
    public $layout = false;

    /**
     * Отключение CSRF валидации
     *
     * @param \yii\base\Action $action
     *
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;
        return parent::beforeAction($action);
    }

    /**
     * Обработка
     *
     * @return bool|string
     */
    public function actionIndex()
    {
        $response = ['location' => 'url/location', 'fileName' => 'data/filename'];

        return json_encode($response);
    }
}