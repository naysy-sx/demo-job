<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

class ParserController extends Controller
{
    public $layout = 'admin';

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionWiki()
    {
        return $this->render('wiki');
    }

    public function actionWikiConsole()
    { exit; // заглушка
        $dir_for_import = "../_oldPagesByPublic";
        $dir_wiki       = "{$dir_for_import}/wiki";
        $wiki_posts     = scandir($dir_wiki);
        $pages_list     = [];

        /** формируем список страниц для парсинга */
        foreach ($wiki_posts as $post) {
            if ($post != '.' && $post != '..' && $post != '.yml' && $post != '.htm') {
                $pages_list[] = "{$dir_wiki}/{$post}";
            }
        }

        /** разбираем список и импортируем */
        foreach ($pages_list as $page_url) {
            // контент оставляем в том же виде
            $page_data['content'] = file_get_contents($page_url . '/.htm');

            // .yml перебираем и сохраняем параметры в удобном виде
            $page_data['yml'] = yaml_parse(file_get_contents($page_url . '/.yml'));

            var_dump($page_url);
        }
    }
}