<?php

namespace app\modules\admin\controllers;

use app\models\CURL;
use yii\web\Controller;

/**
 * @package app\modules\admin\controllers
 */
class SystemController extends Controller
{
    public $layout = 'admin';

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionRequest()
    {
        $this->layout = false;

        $sites = [
            'http://happy-job.ru/',
            'http://happy-inc.ru/',

            'http://new-happy-job.happyapp.ru/',
            'http://max-happy-job.happyapp.ru/',
            'http://lk.happyapp.ru',
            'http://opros.happy-inc.ru/',

            'http://dima-happy-job.happyapp.ru',
            'http://dima-happy-inc.happyapp.ru',

            'https://andrey-happy-inc-ru.happyapp.ru/',
            'https://andrey-happy-job-ru.happyapp.ru/',

            'https://masha-happy-job-ru.happyapp.ru/',
            'https://masha-happy-inc-ru.happyapp.ru/',
        ];

        foreach ($sites as $site) {
            if (CURL::checkUrl($site)) {
                echo "Сайт {$site} работает<br>";
            } else {
                echo "<span style='color: red'>Сайт {$site} НЕ работает</span><br>";
            }
        }

        exit; // прервываем выполнение скрипта
    }

    public function actionGetLog()
    {
        $account_dir = "./../../";

        echo '<pre>';
        var_dump(scandir($account_dir));

        exit; // прервываем выполнение скрипта
    }
}