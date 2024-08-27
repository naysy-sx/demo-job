<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class IpController extends Controller
{
    public $layout = false;
    public $mysql;

    /**
     * @return string
     */
    public function actionIndex()
    {
        $ip          = $_SERVER['REMOTE_ADDR'];
        $this->mysql = mysqli_connect('localhost', 'root', 'Q134679852', 'allowed_ips');
        $datetime    = time();

        // проверка на существование добавляемого ip в базе
        $in_base = $this->mysql->query("SELECT * FROM main WHERE ip = '{$ip}'")->num_rows;

        if ($in_base != 1) {
            $query = "INSERT INTO main(id, ip, status, datetime) VALUES(NULL, '{$ip}', 1, '{$datetime}')";
            $this->mysql->query($query);

            return 'Адрес добавлен';
        }

        return 'Вам уже открыт доступ';
    }
}