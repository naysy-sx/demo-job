<?php

namespace app\controllers;

use app\models\db\TmpOrders;
use Bd;
use yii\base\Controller;

/**
 * @package app\controllers
 */
class SystemController extends Controller
{
    public $layout = false;

    public function actionOrdersParser()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $dir   = "../tmpdir/orders";
        $files = scandir($dir);

        foreach ($files as $file) {
            echo $file;

            if ($file != '.' && $file != '..') {
                $cr_file = "{$dir}/$file";

                $data   = file_get_contents($cr_file);
                $blocks = explode(PHP_EOL . PHP_EOL, $data);

                // перебираем попозиционно текстовые блоки
                foreach ($blocks as $block) {
                    $strings    = explode(PHP_EOL, $block);
                    $data_array = self::getArrayByTextBlock($strings);

                    /** Чистим от мусора */
                    $phone = str_replace("Телефон: ", "", $data_array['phone']);
                    $email = str_replace("E-mail: ", "", $data_array['email']);

                    /** Сохраняем */
                    /** @var TmpOrders $order */
                    $order                  = new TmpOrders;
                    $order->datetime        = $data_array['datetime'];
                    $order->up_notes        = $data_array['up_notes'];
                    $order->name            = $data_array['name'];
                    $order->company         = $data_array['company'];
                    $order->phone           = $phone;
                    $order->email           = $email;
                    $order->staff_qty       = $data_array['staff_qty'];
                    $order->comment         = $data_array['comment'];
                    $order->date_of_contact = '';
                    $order->time_of_contact = '';
                    $order->page_refer      = '';
                    $order->save();
                }
            }
        }

        echo "\n<br>ok\n";
        exit;
    }

    public function actionOrdersParserTrends()
    {
        ini_set('display_errors', '1');
        ini_set('display_startup_errors', '1');
        error_reporting(E_ALL);

        $dir   = "../tmpdir/orders";
        $files = scandir($dir);

        foreach ($files as $file) {
            echo $file;

            if ($file != '.' && $file != '..') {
                $cr_file = "{$dir}/$file";

                $data   = file_get_contents($cr_file);
                $blocks = explode(PHP_EOL . PHP_EOL, $data);

                // перебираем попозиционно текстовые блоки
                foreach ($blocks as $block) {
                    $strings    = explode(PHP_EOL, $block);
                    $data_array = self::getArrayByTextBlock($strings);

                    /** Чистим от мусора */
                    $phone = str_replace("Телефон: ", "", $data_array['phone']);
                    $email = str_replace("E-mail: ", "", $data_array['email']);

                    /** Если со страницы тренды - сохраняем */
                    /** @var TmpOrders $order */
                    if (strpos($data_array['page'], 'trends') !== false){
                        $order                  = new TmpOrders;
                        $order->datetime        = $data_array['datetime'];
                        $order->up_notes        = $data_array['up_notes'];
                        $order->name            = $data_array['name'];
                        $order->company         = $data_array['company'];
                        $order->phone           = $phone;
                        $order->email           = $email;
                        $order->staff_qty       = $data_array['staff_qty'];
                        $order->comment         = $data_array['comment'];
                        $order->date_of_contact = '';
                        $order->time_of_contact = '';
                        $order->page_refer      = '';
                        $order->save();
                    }
                }
            }
        }

        echo "\n<br>ok\n";
        exit;
    }

    /**
     * Функция распила текстового блока на массив с данными
     *
     * @param $block
     *
     * @return array
     */
    public static function getArrayByTextBlock($block)
    {
        $result = [];

        if (!empty($block[0])) {
            $result['datetime']  = $block[0];
            $result['up_notes']  = $block[1];
            $result['name']      = $block[2];
            $result['company']   = $block[3];
            $result['phone']     = $block[4];
            $result['email']     = $block[5];
            $result['comment']   = $block[6];
            $result['staff_qty'] = $block[7];
            $result['page']      = $block[9];
        } else {
            $result['datetime']  = $block[1];
            $result['up_notes']  = $block[2];
            $result['name']      = $block[3];
            $result['company']   = $block[4];
            $result['phone']     = $block[5];
            $result['email']     = $block[6];
            $result['comment']   = $block[7];
            $result['staff_qty'] = $block[8];
            $result['page']      = $block[10];
        }

        if (!empty($result['datetime'])) {
            return $result;
        }
    }

    /**
     * Чтение сталого лог-файла
     *
     * @return bool
     */
    public function actionReadOldLogFile()
    {
        $file = "../tmpdir/log_files/logAjax_0.txt";

        $data   = file_get_contents($file);
        $blocks = explode(PHP_EOL . PHP_EOL . PHP_EOL, $data);

        foreach ($blocks as $num => $block) {
            if ($num < 150) {
                $datetime = trim(explode('Array', $block)[0]);
                $data_str = trim(explode(')', end(explode('(', trim(explode('Array', $block)[2]))))[0]);
                $data_arr = self::stringToArray($data_str, ['datetime' => $datetime]);

                echo '<pre>';
                var_dump($data_arr);
                echo '<hr>';
            } else {
                exit;
            }
        }

        echo '</pre>';

        return true;
    }

    /**
     * Из строки типа "[name] => test" генерит массив
     *
     * @param $string
     * @param $paste_params
     *
     * @return array
     */
    private static function stringToArray($string, $paste_params): array
    {
        $array = [];

        // делим на строки
        $params = explode(PHP_EOL, $string);

        foreach ($params as $string_param) {
            // убираем лишние пробелы по краям
            $string_param = trim($string_param);

            // находим название ключа
            if (preg_match_all('|\[(.*)\]|Uis', $string_param, $result)) {
                foreach ($result[1] as $key => $text) {
                    $key = $text;
                }
            }

            // находим значение
            $value = end(explode('=> ', $string_param));

            // формируем массив на вывод
            $array[$key] = $value;

            // добавляем элементы
            foreach ($paste_params as $param_key => $param_value) {
                $array[$param_key] = $param_value;
            }
        }

        return $array;
    }
}