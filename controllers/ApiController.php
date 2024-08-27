<?php

namespace app\controllers;

use AmoApi;
use yii\web\Controller;

class ApiController extends Controller
{
    public $layout = false;

    /**
     * Обработка Амо @todo подготовка
     *
     * @return bool
     */
    public function actionAmo(): bool
    {
        $safe_token     = md5('!Qq134679852');
        $received_token = htmlspecialchars($_GET['ht']);
        $method         = htmlspecialchars($_GET['method']);
        $data           = htmlspecialchars($_GET['data']);
        $headers        = htmlspecialchars($_GET['headers']);
        $entity_id      = htmlspecialchars($_GET['entity_id']);

        if ($safe_token == $received_token) {
            $data    = unserialize($data);
            $headers = unserialize($headers);

            $amo = new AmoApi;
            $amo->auth();
            $amo->sendCurlToAmoCrm($method, $data, $headers, $entity_id);
        }

        return true;
    }
}