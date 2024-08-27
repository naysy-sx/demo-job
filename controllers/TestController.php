<?php

namespace app\controllers;

use app\modules\admin\models\PostArticleModule;
use Codeception\Util\Debug;
use Detection\MobileDetect;
use Mobile_Detect;
use Yii;
use yii\web\Controller;

/**
 * Тестирование работоспособности сайта
 *
 * Объекты проверок:
 *  - страницы
 *  - модули
 *  - запросы
 *  - картинки/видео
 *  - скрипты
 *
 * @package app\controllers
 */
class TestController extends Controller
{
    public $layout = false;

    /**
     * @return bool
     * @throws \Detection\Exception\MobileDetectException
     */
    public function actionIndex()
    {
        exit;
        // оптимизатор css
        // задача - собрать все стили в одном месте (+можно минифицировать)
        $css_file = "css/fix_style_assets.css";
        $css_code = file_get_contents($css_file);

        echo '<pre>';
        var_dump($css_code);


        exit;
        if (!self::checkController()){
            exit;
        }

        self::getDebug('page');

        return true;
    }

    public function actionPage()
    {
        return $this->render('page');
    }

    /**
     * @param $point
     */
    private static function getDebug($point): void
    {
        Debug::debug($point);
    }

    /**
     * Список страниц для проверки
     *
     * @return array
     */
    private static function getPagesList(): array
    {
        return [];
    }

    /**
     * Список модулей / классов для проверки
     *
     * @return array
     */
    private static function getClassList(): array
    {
        return Yii::$classMap;
    }

    /**
     * Проверка, откуда запускаются тесты
     *
     * @return bool
     */
    private static function checkController(): bool
    {
        if (Yii::$app->controller->id == 'test'){
            return true;
        }

        return false;
    }
}