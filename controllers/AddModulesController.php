<?php

namespace app\controllers;

use yii\web\Controller;

/**
 * Динамические модули для всех типов страниц
 * @package app\controllers
 */
class AddModulesController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $type = htmlspecialchars($_GET['type']);

        if (isset($type) && mb_strlen($type) > 0) {
            $file = "../views/add-modules/{$type}.php";

            if (is_file($file)) {
                return $this->render($type);
            } else {
                return $this->render('error-module');
            }
        }

        return 'Тип модуля не передан';
    }
}