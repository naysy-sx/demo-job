<?php

namespace app\controllers;

use app\models\db\News;
use app\models\GetDirectoryList;
use yii\web\Controller;

class BlogController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return bool
     */
    public function actionParser()
    {
        $dir_for_import = "../_oldPages/pages";
        $dir_wiki       = "{$dir_for_import}/blog";
        $blog_posts     = scandir($dir_wiki);
        $dirs_list      = [];
        $pages_list     = [];

        $directory_list     = new GetDirectoryList;

        echo '<pre>';
        var_dump($directory_list->listFolderFiles($dir_wiki));
        exit;


        $directory_list_tmp = $directory_list->start($dir_wiki);
        $directory_list     = $directory_list->list;

        echo '<pre>';
        var_dump($directory_list);
        exit;

        /** формируем список страниц для парсинга */
        foreach ($blog_posts as $post) {
            // убираем мусорные названия
            if ($post != '.' && $post != '..' && $post != '.yml' && $post != '.htm') {
                // проверяем, директория ли
                if (is_dir("{$dir_wiki}/{$post}")) {
                    // добавляем
                    $dirs_list[] = "{$dir_wiki}/{$post}";
                    // если внутри есть еще директории - добавляем и их

                }
            }
        }

        echo '<pre>';
        var_dump($dirs_list);
        exit;

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

                        $new->content           = $page_data['content'];
                        $new->announce          = $page_data['yml']['announce'];
                        $new->image_preview     = $page_data['yml']['image_preview'];
                        $new->image_preview_alt = $page_data['yml']['image_preview_alt'];
                        $new->image_head        = $page_data['yml']['image_head'];
                        $new->image_head_alt    = $page_data['yml']['image_head_alt'];
                        $new->meta_description  = $page_data['yml']['meta_description'];
                        $new->url               = $page_data['yml']['url'];
                        $new->publish_date      = $page_data['yml']['publish_date'];
                        $new->publish           = $page_data['yml']['publish'];
                        $new->save();
        }

        return true;
    }
}