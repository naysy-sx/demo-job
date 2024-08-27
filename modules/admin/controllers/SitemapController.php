<?php

namespace app\modules\admin\controllers;

use app\models\db\Blog;
use app\models\db\HjMaterials;
use app\models\db\WikiPosts;
use yii\web\Controller;

/**
 * Class SitemapController
 * @package app\modules\admin\controllers
 */
class SitemapController extends Controller
{
    public $layout = 'admin';

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Генерация файла
     *
     * @return string
     */
    public function actionGenerateFile()
    {
        $xml_content    = "";
        $articles       = [];
        $current_domain = 'https://' . $_SERVER["HTTP_HOST"] . '/';

        // ищем весь материал и все страницы
        $wiki          = WikiPosts::find()->where(['active' => 1])->asArray()->all();
        $hj_material   = HjMaterials::find()->where(['active' => 1])->asArray()->all();
        $hr_blog       = Blog::find()->where(['publish' => 1])->asArray()->all();
        $all_materials = [];

        // перебираем
        foreach ($wiki as $wiki_post) {
            $all_materials[$wiki_post['url']] = $wiki_post;
        }
        foreach ($hj_material as $hj_post) {
            $all_materials[$hj_post['url']] = $hj_post;
        }
        foreach ($hr_blog as $blog_post) {
            $all_materials[$blog_post['url']] = $blog_post;
        }

        $out = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

        foreach ($all_materials as $row) {
            if (!empty($row['created_at'])) {
                $max_date = max($row['created_at'], $row['updated_at']);
                $date     = date('Y-m-d', $max_date);
            } else {
                $date = date('Y-m-d', time() - 3600 * 24);
            }

            $out .= '
	<url>
		<loc>' . $current_domain . $row['url'] . '/</loc>
		<lastmod>' . $date . '</lastmod>
		<priority>0.8</priority>
	</url>';
        }

        $out .= '</urlset>';

        echo 'Файл сохранен';

        //        header('Content-Type: text/xml; charset=utf-8');
        //        echo $out;

        file_put_contents("../public_html/sitemap.xml", $out);

        echo "<meta http-equiv='refresh' content='1; url=/admin/sitemap/' />";

        exit;
    }

    /**
     * Отобразить текущий файл
     */
    public function actionGetFile()
    {
        header('Content-Type: text/plain');
        $file = "sitemap.xml";
        $data = file_get_contents($file);

        echo '<pre>';
        echo htmlentities($data);
        echo '</pre>';
    }
}