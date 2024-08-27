<?php

namespace app\controllers;

use app\models\db\Blog;
use app\models\db\Video;
use app\models\db\WikiPosts;
use yii\base\BaseObject;
use yii\web\Controller;

/**
 * Первичный, устаревший парсер (использовался для стартового наполнения)
 * todo: после переноса в commands можно удалять
 *
 * @package app\controllers
 */
class ParserController extends Controller
{
    public $layout = false;

    /**
     * парсер из страрого .yml файла
     */
    public function actionVideos()
    { exit; // заглушка
        $file   = "../tmpdir/videos_list/list.yml";
        $data   = file_get_contents($file);
        $blocks = explode('- id: ', $data);
        $num    = 1;
        $videos = [];

        var_dump(count($blocks));

        foreach ($blocks as $block) {
            $block_data = explode("\n", $block);

            $videos[$num] = [
                'title'    => self::clearDataByTrashYml($block_data[1]),
                'vimeo_id' => self::clearDataByTrashYml($block_data[2]),
                'image'    => self::clearDataByTrashYml($block_data[3]),
                'duration' => self::clearDataByTrashYml($block_data[4]),
                'category' => self::clearDataByTrashYml($block_data[6]),
                'date'     => self::clearDataByTrashYml($block_data[7]),
                'product'  => self::clearDataByTrashYml($block_data[9]),
                'type'     => self::clearDataByTrashYml($block_data[10]),
            ];

            $num++;
        }

        foreach ($videos as $video) {
            if (!empty($video['title']) && mb_strlen($video['title']) > 3){
                $new_video              = new Video;
                $new_video->datetime    = time();
                $new_video->title       = $video['title'];
                $new_video->active      = 1;
                $new_video->vimeo       = $video['vimeo_id'];
                $new_video->image       = $video['image'];
                $new_video->duration    = $video['duration'];
                $new_video->category_id = $video['category'];
                $new_video->datetime    = strtotime($video['date']);
                $new_video->product     = $video['product'];
                $new_video->type        = $video['type'];
                $new_video->save();

                echo '<pre>';
                var_dump($new_video);
            }
        }

        exit;
    }

    /**
     * @param $string
     *
     * @return string
     */
    private static function clearDataByTrashYml($string): string
    {
        // чистим от пробелов
        $string = trim($string);

        // делим на части
        $parts = explode(': ', $string);

        // оставляем только жепку
        $end_of_string = end($parts);

        // удаляем кавычки
        $clear_end_of_string = str_replace("'", "", $end_of_string);

        // возвращаем результат
        return trim($clear_end_of_string);
    }

    /**
     * Парсер вики-страниц
     *
     * @return bool
     */
    public function actionWikiPagesParser()
    {
        exit;//заглушка
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

            $new_post = new WikiPosts;

            echo $page_data['yml']['tags'][0];
            echo '<br>';

            // определем категорию
            if ($page_data['yml']['tags'][0] == 'ekonomicheskiy-effekt') {
                $new_post->category_id = 3;
            } elseif ($page_data['yml']['tags'][0] == 'metodika-issledovaniya') {
                $new_post->category_id = 1;
            } elseif ($page_data['yml']['tags'][0] == 'sposoby-prohojdeniya-oprosa') {
                $new_post->category_id = 10;
            } elseif ($page_data['yml']['tags'][0] == 'perehod-na-Happy-Job') {
                $new_post->category_id = 2;
            } elseif ($page_data['yml']['tags'][0] == 'otchety-i-obratnaya-svyaz') {
                $new_post->category_id = 6;
            } elseif ($page_data['yml']['tags'][0] == 'ezhegodnye-oprosy') {
                $new_post->category_id = 4;
            } elseif ($page_data['yml']['tags'][0] == 'podkluchenie-i-podderzhka') {
                $new_post->category_id = 8;
            } elseif ($page_data['yml']['tags'][0] == 'rekomendacii-po-razvitiu') {
                $new_post->category_id = 7;
            } elseif ($page_data['yml']['tags'][0] == 'puls-oprosy') {
                $new_post->category_id = 5;
            } elseif ($page_data['yml']['tags'][0] == 'ezhegodnye-oprosy') {
                $new_post->category_id = 4;
            } elseif ($page_data['yml']['tags'][0] == 'lk-faq') {
                $new_post->category_id = 0;
            } elseif ($page_data['yml']['tags'][0] == 'start-oprosa') {
                $new_post->category_id = 0;
            } else {
                $new_post->category_id = 0;
            }

            $new_post->title            = $page_data['yml']['title'];
            $new_post->description      = $page_data['yml']['announce'];
            $new_post->content          = $page_data['content'];
            $new_post->active           = 1;
            $new_post->weight           = 0;
            $new_post->meta_description = '';
            $new_post->password         = 0;
            $new_post->url              = $page_data['yml']['url'];
            $new_post->save();
        }

        return true;
    }

    public function actionIndex()
    {
        exit;
        $dir_for_import = "for_parser/pages/";
        $dir_hr_blog    = "{$dir_for_import}/hr-blog";
        $hr_blog_posts  = scandir($dir_hr_blog);
        $pages_list     = [];

        /** формируем список страниц для парсинга */
        foreach ($hr_blog_posts as $post) {
            if ($post != '.' && $post != '..' && $post != '.yml' && $post != '_backup-20-04-23') {
                $pages_list[] = "{$dir_hr_blog}/{$post}";
            }
        }

        /** разбираем список и импортируем */
        foreach ($pages_list as $page_url) {
            // контент оставляем в том же виде
            $page_data['content'] = file_get_contents($page_url . '/.htm');

            // .yml перебираем и сохраняем параметры в удобном виде
            $page_data['yml'] = file_get_contents($page_url . '/.yml');

            $pageData = yaml_parse($page_data['yml']);

            if (!isset($pageData['hide_from_view']) && !$pageData['hide_from_view']) {
                $pages[$page_url]        = $pageData;
                $pages[$page_url]['url'] = $page_url;
                if (!@$pageData['title']) {
                    $pages[$page_url]['title'] = '';
                }
            }

            $new_post           = new Blog;
            $new_post->category = '1';

            if (isset($pages[$page_url]['diff_art_title']) && mb_strlen($pages[$page_url]['diff_art_title'])) {
                $new_post->title = $pages[$page_url]['diff_art_title'];
            } else {
                $new_post->title = $pages[$page_url]['title'];
            }

            $new_post->small_description     = $pages[$page_url]["announce"];
            $new_post->content               = $page_data['content'];
            $new_post->image                 = $pages[$page_url]["image_preview"];
            $new_post->up_images             = $pages[$page_url]["image_head"];
            $new_post->created_at            = time();
            $new_post->status                = 1;
            $new_post->last_edits            = time();
            $new_post->image_preview_alt     = $pages[$page_url]["image_preview_alt"];
            $new_post->image_head_alt        = $pages[$page_url]["image_head_alt"];
            $new_post->image_interesting     = $pages[$page_url]["image_interesting"];
            $new_post->image_interesting_alt = $pages[$page_url]["image_interesting_alt"];
            $new_post->meta_description      = $pages[$page_url]["meta_description"];
            $new_post->meta_other            = $pages[$page_url]["meta_other"];
            $new_post->image_head_class      = $pages[$page_url]["image_head_class"];
            $new_post->url                   = $pages[$page_url]["url"];
            $new_post->publish_date          = $pages[$page_url]["publish_date"];
            $new_post->tags                  = serialize($pages[$page_url]["tags"]);
            $new_post->publish               = $pages[$page_url]["publish"];
            $new_post->you_may_like          = serialize($pages[$page_url]["you_may_like"]);
            $new_post->save();
        }
    }

    /**
     * Поиск и чистка twig-мусора
     *
     * @return bool
     */
    public function actionSearchTwigTrash()
    {
        $all_posts   = Blog::find()->asArray()->all();
        $trash_posts = [];

        foreach ($all_posts as $post) {
            $content = $post['content'];

            if (str_contains($content, '{%')) {
                $trash_posts[$post['id']] = $post;

                $cr_post = Blog::find()->where(['id' => $post['id']])->one();
                echo $cr_post['id'] . '<br><br>';

                $replaced_content = str_replace("{% include directory ~ 'common/table-of-contents.htm' with { 'list_of_titles':
list_of_titles } %}", '<!-- h1_navs -->', $cr_post->content);

                $cr_post->content = $replaced_content;
                $cr_post->save();
            }
        }

        echo 'Постов с твигом осталось: ' . count($trash_posts) . "<br>\n\n";

        foreach ($trash_posts as $key => $t_post) {
            echo "#{$key} - {$t_post['title']}<br>\n";
        }

        exit;

        return true;
    }

    /**
     * Расшифровка сериализованных категорий и сохранение
     *
     * @return bool
     */
    public function actionGetCategory()
    {
        // ищем все статьи
        $all_posts = Blog::find()->asArray()->all();

        // перебираем, расшифровываем, сохраняем
        foreach ($all_posts as $post) {
            if (isset($post['tags']) && mb_strlen($post['tags']) > 1) {
                $cr_post       = Blog::find()->where(['id' => $post['id']])->one();
                $cr_post->tags = unserialize($cr_post->tags)[0];
                $cr_post->save();
            }
        }

        return true;
    }

    /**
     * Чистка url-ов в базе
     * (так как страницы лежат в "глубине" и их адреса не верные, относительно public,
     * они сохранились в соответствии с размещением (for_parser/pages//)
     *
     * @return bool
     */
    public function actionClearUrl()
    {
        $posts = Blog::find()->asArray()->all();

        foreach ($posts as $post) {
            $cr_post   = Blog::find()->where(['id' => $post['id']])->one();
            $clear_url = end(explode('for_parser/pages//', $cr_post->url));

            $cr_post->url = $clear_url;
            $cr_post->save();
        }

        return true;
    }

    /**
     * Первая версия (не верно определяется время статьи, фото-превью и краткое описание)
     *
     * @return bool
     */
    public function actionFirst()
    {
        exit; // заглушка от срабатывания
        $parent_dir = 'old_hr-blog';
        $dirs       = scandir($parent_dir);

        foreach ($dirs as $dir) {
            if ($dir != '.' && $dir != '..' && $dir != 'index.html') {
                $finial_url = "{$parent_dir}/{$dir}/index.html";
                $file       = file_get_contents($finial_url);

                unset($page_data);
                $page_data        = [];
                $page_data['url'] = $dir;

                // ищем пустой див с контентом
                if (preg_match_all('|<div>(.*)</div>|Uis', $file, $result)) {
                    $page_data['content'] = $result[0][0];
                }

                // ищем пустой h1 с заголовском (названием поста)
                if (preg_match_all('|<h1>(.*)</h1>|Uis', $file, $result)) {
                    $page_data['title'] = trim($result[1][0]);
                }

                // ищем верхнюю картинку
                if (preg_match_all('|<div id=\"super-title-wrap\">(.*)</div>|Uis', $file, $result)) {
                    foreach ($result[1] as $key => $text) {
                        if (preg_match_all('|<img src=(.*)>|Uis', $text, $result)) {
                            foreach ($result[1] as $key => $text) {
                                $text               = str_replace('"', " ", $text);
                                $text               = trim($text);
                                $page_data['image'] = $text;
                            }
                        }
                    }
                }

                $page_data['cleared_content'] = strip_tags($page_data['content']);

                // на основе собранных данных лепим статью в базу
                $new_post                    = new Blog;
                $new_post->category          = '1';
                $new_post->title             = $page_data['title'];
                $new_post->small_description = mb_substr($page_data['cleared_content'], 0, 175);
                $new_post->content           = $page_data['content'];
                $new_post->image             = $page_data['image'];
                $new_post->up_images         = $page_data['image'];
                $new_post->created_at        = time();
                $new_post->status            = 1;
                $new_post->save();

                echo '<pre>';
                var_dump($new_post);
            }
        }

        return true;
    }

    /**
     * Построчное чтение файла
     *
     * @param $file
     */
    public static function lineRead($file)
    {
        $handle = fopen($file, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                var_dump($line);
            }
            fclose($handle);
        }
    }

    /**
     * @param $html
     */
    public static function firstRegular($file)
    {
        if (preg_match_all('|<span itemprop=\"name\">(.*)</span>|Uis', $file, $result)) {
            foreach ($result[1] as $key => $text) {
                $text = strip_tags($text);
                $text = trim($text);
                // echo $key . ') ' . $text . "\n";
                $data['name'] = $text;
            }
        }
    }

    /**
     * Групповые правки по содержимому
     *
     * @return bool
     */
    public function actionEdits()
    {
        $blog_posts = Blog::find()->asArray()->all();

        foreach ($blog_posts as $post) {
            $cr_post     = Blog::find()->where(['id' => $post['id']])->one();
            $cr_post->h1 = $cr_post->title;
            $cr_post->save();
        }

        return true;
    }
}