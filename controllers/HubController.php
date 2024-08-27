<?php

namespace app\controllers;

use AmoApi;
use yii\web\Controller;

/**
 * Функциональный хаб
 * Служит контроллером распределения задач, которые ранее были реализованы в разбросанных
 * файлах по нескольким серверам.
 * В дальнейшем, есть мысть перенести это на полноценные микро-сервисы
 * @package app\controllers
 */
class HubController extends Controller
{
    public $layout         = false;
    public $token_conntect = 'T1_devtoken';

    /**
     * TODO !!!
     *
     * @param       $id
     * @param       $module
     * @param array $config
     */
    public function __construct($id, $module, $config = [])
    {
        $this->token_conntect = md5($this->token_conntect);

        parent::__construct($id, $module, $config);
    }

    /**
     * Заглушка индексного метода
     *
     * @return string
     */
    public function actionIndex()
    {
        return 'Выберите метод хаба';
        exit;
    }

    /**
     * Добавление лида в Амо
     *
     * @return bool
     */
    public function actionAmoAddLead(): bool
    {
        if (!empty($_GET['token']) && $_GET['token'] == $this->token_conntect) {
            $amo = new AmoApi;
            $amo->sendCurlToAmoCrm('', '', '', '');

            return true;
        }

        return false;
    }

    /**
     * Телега
     *
     * @return bool
     */
    public function actionTelegram(): bool
    {
        if (!empty($_GET['token']) && $_GET['token'] == $this->token_conntect) {
            if ($_GET['request'] == 'send-statistics') {}

            if ($_GET['request'] == 'get-data') {}

            return true;
        }

        return false;
    }

    /**
     * Почтовые рассылки
     *
     * @return bool
     */
    public function actionMailers(): bool
    {
        return true;
    }

    /**
     * Логирование
     *
     * @return bool
     */
    public function actionLogger(): bool
    {
        return true;
    }

    /**
     * Чеккер системы - ответ временной меткой для лога
     *
     * @return int
     */
    public function actionTest(): int
    {
        return time();
    }

    /**
     * Обновление токена
     * todo: нужен ли?
     *
     * @return false
     */
    public function actionRefreshToken(): bool
    {
        return false;
    }
}