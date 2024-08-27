<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Транслиттер
 *
 * @package app\modules\admin\controllers
 */
class TranslitController extends Controller
{
    public $layout = false;

    /**
     * Обработка входящего запроса
     *
     * @return string
     */
    public function actionIndex()
    {
        $title = htmlspecialchars($_GET['title']);

        return self::getTranslit($title);
    }

    /**
     * Ф-ция генерации транслита
     *
     * @param $string
     *
     * @return string
     */
    private static function getTranslit($string)
    {
        // стоковая библиотека символов
        $converter = [
            'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
            'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
            'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
            'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
            'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
            'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
            'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
        ];

        $string = mb_strtolower($string);
        $string = strtr($string, $converter);
        $string = mb_ereg_replace('[^-0-9a-z]', '-', $string);
        $string = mb_ereg_replace('[-]+', '-', $string);
        $string = trim($string, '-');

        return $string;
    }
}