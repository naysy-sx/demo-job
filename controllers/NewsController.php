<?php

namespace app\controllers;

use app\models\db\News;
use yii\web\Controller;

/**
 * Новости
 * @package app\controllers
 */
class NewsController extends Controller
{
    /**
     * Главная страница - все новости
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $news_list = News::find()->where(['publish' => 1])->orderBy(['id' => SORT_DESC])->asArray()->all();

        return $this->render('index', [
            'news_list' => $news_list,
        ]);
    }

    /**
     * @return bool
     */
    public function actionParser()
    {
        exit; // заглушка от повторного копирования
        $dir_for_import = "../_oldPagesByPublic";
        $dir_wiki       = "{$dir_for_import}/news";
        $news_posts     = scandir($dir_wiki);
        $pages_list     = [];

        /** формируем список страниц для парсинга */
        foreach ($news_posts as $post) {
            if ($post != '.' && $post != '..' && $post != '.yml' && $post != '.htm') {
                $pages_list[] = "{$dir_wiki}/{$post}";
            }
        }

        foreach ($pages_list as $page_url) {
            // контент оставляем в том же виде
            $page_data['content'] = file_get_contents($page_url . '/.htm');

            // .yml перебираем и сохраняем параметры в удобном виде
            $page_data['yml'] = yaml_parse(file_get_contents($page_url . '/.yml'));

            /** @var News $new */
            $new = new News;

            if (isset($page_data['yml']['diff_art_title']) && mb_strlen($page_data['yml']['diff_art_title']) > 1) {
                $new->title = $page_data['yml']['diff_art_title'];
            } else {
                $new->title = $page_data['yml']['title'];
            }

            $page_data['yml']['url'] = strtolower($page_data['yml']['url']);

            if (!self::havePage($page_data['yml']['url'])) {
                $new->content           = $page_data['content'];
                $new->announce          = $page_data['yml']['announce'];
                $new->image_preview     = $page_data['yml']['image_preview'];
                $new->image_preview_alt = $page_data['yml']['image_preview_alt'];
                $new->image_head        = $page_data['yml']['image_head'];
                $new->image_head_alt    = $page_data['yml']['image_head_alt'];
                $new->meta_description  = $page_data['yml']['meta_description'];
                $new->url               = $page_data['yml']['url'];
                $new->publish_date      = $page_data['yml']['publish_date'];
                $new->publish           = (string)$page_data['yml']['publish'];
                $new->hide_author       = 0;

                if (!$new->save()) {
                    echo "Ошибка добавления!";
                    echo '<pre>';
                    var_dump($new);
                    exit;
                } else {
                    echo "Страница {$page_data['yml']['url']} добавлена<br>";
                }
            } else {
                //echo "Страница уже существует ({$page_data['yml']['url']})<br>";
            }
        }

        return true;
    }

    /**
     * Проверка наличия страницы в бд
     *
     * @param $url
     *
     * @return bool
     */
    private static function havePage($url): bool
    {
        $page = News::find()->where(['url' => $url])->one();

        if ($page) {
            return true;
        }

        return false;
    }

    /**
     * Приведение ссылок к нижнему регистру
     *
     * @return bool
     */
    public function actionRepairLinks(): bool
    {
        $pages = News::find()->asArray()->all();

        foreach ($pages as $page) {
            $cr_page      = News::find()->where(['id' => $page['id']])->one();
            $cr_page->url = strtolower($cr_page->url);

            if (substr($cr_page->url, -1) != '/') {
                $cr_page->url = $cr_page->url . '/';
            }

            $cr_page->save();
        }

        return true;
    }
}