<?php
namespace app\modules\admin\controllers;

use app\models\db\Seo;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class SeoController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        //self::getAllUrls();
        self::getPageData();
        //self::editAllUrlToNew();
    }

    /**
     * Метод получения всех урлов сайта и сохранения в бд
     *
     * @return array
     * @throws \Exception
     */
    private static function getAllUrls()
    {
        exit; // заглушка
        $sitemap = file_get_contents('sitemap.xml');
        $sitemap = new \SimpleXMLElement($sitemap);

        foreach ($sitemap as $item) {
            $item = (array)$item;

            $site             = new Seo;
            $site->page_url   = $item['loc'];
            $site->created_at = time();
            $site->updated_at = time();
            $site->save();
        }
    }

    /**
     * Метод получения и сохранения в бд данных со страниц
     *
     * @return bool
     */
    private static function getPageData()
    {
        // собираем все страницы из бд
        $urls = Seo::find()
            //->where(['title' => null])
            //->orWhere(['title' => ''])
            ->where([
                '<',
                'updated_at',
                1711478658,
            ])
            ->asArray()
            ->all();
        
        // перебираем
        foreach ($urls as $url) {
            echo "Разбираем {$url['page_url']}<br>";

            /** @var Seo $current_page */
            $current_page = Seo::find()->where(['id' => $url['id']])->one();
            $fp           = file_get_contents($url['page_url']);

            /** TITLE */
            $title = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
            $title = preg_replace('/\s+/', ' ', $title_matches[1]);
            $title = str_replace("<br>", '', $title);
            $title = str_replace("\r", '', $title);
            $title = str_replace("\n", '', $title);
            $title = trim($title);

            /** H1 */
            $h1 = preg_match("/<h1>(.*)<\/h1>/siU", $fp, $h1_matches);
            $h1 = preg_replace('/\s+/', ' ', $h1_matches[1]);
            $h1 = str_replace("<br>", '', $h1);
            $h1 = str_replace("\r", '', $h1);
            $h1 = str_replace("\n", '', $h1);
            $h1 = trim($h1);

            /** H2 */
            $h2 = preg_match("/<h2>(.*)<\/h2>/siU", $fp, $h2_matches);

            $h2 = preg_replace('/\s+/', ' ', $h2_matches[1]);
            $h2 = str_replace("<br>", '', $h2);
            $h2 = str_replace("\r", '', $h2);
            $h2 = str_replace("\n", '', $h2);
            $h2 = trim($h2);

            /** DESCRIPTION */
            $description_m = preg_match("/<meta name=\"description\" content=\"(.*)\">/siU", $fp, $h2_matches);
            $description   = preg_replace('/\s+/', ' ', $description_m[1]);
            $description   = str_replace("<br>", '', $description);
            $description   = str_replace("\r", '', $description);
            $description   = str_replace("\n", '', $description);
            $description   = trim($description);

            // сохраняем
            $current_page->updated_at  = time();
            $current_page->title       = strip_tags($title);
            $current_page->h1          = strip_tags($h1);
            $current_page->h2          = strip_tags($h2);
            $current_page->description = strip_tags($description);
            $current_page->updated_at  = time();
            $current_page->save();
        }

        return true;
    }

    private static function editAllUrlToNew()
    {
        exit; // заглушка
        $urls = Seo::find()
            ->asArray()
            ->all();

        // перебираем
        foreach ($urls as $url) {
            /** @var Seo $current_page */
            $current_page           = Seo::find()->where(['id' => $url['id']])->one();
            $new_url                = explode('://', $current_page['page_url']);
            $new_url                = "{$new_url[0]}://new.{$new_url[1]}";
            $current_page->page_url = $new_url;
            $current_page->save();
        }
    }
}