<?php

namespace app\controllers;

use app\models\db\Blog;
use app\models\db\HjMaterials;
use app\models\db\News;
use app\models\db\WikiPosts;
use app\models\pagegenerator\PageGenerator;
use Yii;
use yii\web\Controller;

/**
 * Динамичческие страницы
 * Извлечение из адреса транслита статьи и поиск ее в базе
 * @package app\controllers
 */
class DynamicPagesController extends Controller
{
    /**
     * Основной метод - отображение страницы (все материалы)
     *
     * @return string
     */
    public function actionIndex()
    {
        $current_page_link = self::getMaterialName();
        $current_material  = self::findMaterial($current_page_link);

        return $this->render('index', [
            'current_material' => $current_material,
        ]);
    }

    /**
     * Получение блогового материала
     *
     * @return string
     */
    public function actionHrBlog()
    {
        $current_page_link = 'hr-blog/' . self::getMaterialName();
        $current_material  = self::findHrBlogMaterial($current_page_link);

        \Yii::$app->view->registerMetaTag([
            'name'    => 'description',
            'content' => $current_material->meta_description,
        ]);

        return $this->render('../hr-blog/view', [
            'data' => $current_material,
        ]);
    }

    /**
     * Получение wiki материала
     *
     * @return string
     */
    public function actionWiki()
    {
        $current_page_link = 'wiki/' . self::getMaterialName();
        $current_material  = self::findWikiMaterial($current_page_link);

        Yii::$app->view->title = $current_material->title . ' | HR-энциклопедия развития персонала Happy Job';

        Yii::$app->view->registerMetaTag([
            'name'    => 'description',
            'content' => $current_material->meta_description .
                '. Happy Wiki - вопросы и ответы о платформе для исследования вовлеченности и лояльности персонала Happy Job.',
        ]);

        return $this->render('../wiki/view', [
            'data' => $current_material,
        ]);
    }

    /**
     * Получение новостных статей
     *
     * @return string
     */
    public function actionNews()
    {
        $current_page_link = 'news/' . self::getMaterialName();
        $current_material  = self::findNewsMaterial($current_page_link);

        Yii::$app->view->title = $current_material->title;

        Yii::$app->view->registerMetaTag([
            'name'    => 'description',
            'content' => $current_material->meta_description,
        ]);

        return $this->render('../news/view', [
            'data' => $current_material,
        ]);
    }

    /**
     * Выборка названия материала из адресной строки
     * todo: добавить проверку на слэши
     *
     * @return false|string
     */
    public static function getMaterialName()
    {
        if (mb_substr($_SERVER['REQUEST_URI'], -1) == '/') {
            $uri = substr($_SERVER['REQUEST_URI'], 0, -1);

            $array = explode('/', $uri);

            return end($array);
        }

        $array1 = explode('/', $_SERVER['REQUEST_URI']);

        return end($array1);
    }

    /**
     * Получение заданного материала
     *
     * @param $current_page_link
     *
     * @return array|false|\yii\db\ActiveRecord
     */
    public static function findMaterial($current_page_link)
    {
        $material = HjMaterials::find()->where(['link' => $current_page_link])->one();

        if ($material) {
            return $material;
        }

        return false;
    }

    /**
     * Получение заданного материала (hr-blog)
     *
     * @param $current_page_link
     *
     * @return array|false|\yii\db\ActiveRecord
     */
    public static function findHrBlogMaterial($current_page_link)
    {
        $material =
            Blog::find()->where([
                'like',
                'url',
                self::trimmingEdges($current_page_link),
            ])->one();

        if ($material) {
            return $material;
        }

        return false;
    }

    /**
     * Получение заданного материала (wiki)
     *
     * @param $current_page_link
     *
     * @return array|false|\yii\db\ActiveRecord
     */
    public static function findWikiMaterial($current_page_link)
    {
        $material = WikiPosts::find()
            ->where(['url' => $current_page_link])
            ->one();

        if ($material) {
            return $material;
        }

        return false;
    }

    /**
     * Получение заданного материала (wiki)
     *
     * @param $current_page_link
     *
     * @return array|false|\yii\db\ActiveRecord
     */
    public static function findNewsMaterial($current_page_link)
    {
        $material = News::find()
            ->where([
                'like',
                'url',
                $current_page_link,
            ])
            ->one();

        if ($material) {
            return $material;
        }

        return false;
    }

    /**
     * Проверка доступности материала
     *
     * @param $material_link
     *
     * @return array|false|\yii\db\ActiveRecord
     */
    public static function checkMaterial($material_link)
    {
        $material = HjMaterials::find()->where(['link' => $material_link])->one();

        if ($material) {
            return $material;
        }

        return false;
    }

    /**
     * Ручной вызов генератора страниц с параметрами
     *
     * @param $name
     * @param $view_status
     *
     * @return string
     */
    public function getPageGenerator($name, $view_status)
    {
        /** @var PageGenerator $pg */
        $pg              = new PageGenerator;
        $pg->type        = 2;
        $pg->name        = $name;
        $pg->view_status = $view_status;

        return $pg->start();
    }

    /**
     * Обрезка краев строки
     *
     * @param $string
     *
     * @return false|string
     */
    private static function trimmingEdges($string): string
    {
        $string = substr($string, 0, -3);

        return substr($string, 2);
    }
}