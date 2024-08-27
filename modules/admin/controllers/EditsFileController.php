<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Последние отредаченные файлы
 * @package app\modules\admin\controllers
 */
class EditsFileController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $path         = ".";
        $latest_ctime = 0;
        $latest_files = []; //
        $d            = dir($path);

        while (false !== ($entry = $d->read())) {
            $filepath = "{$path}/{$entry}";
            if (filectime($filepath) > $latest_ctime) {
                $latest_ctime   = filectime($filepath);
                $latest_files[] = $entry; //
            }
        }

        echo '<pre>';
        var_dump($latest_files);
    }
}