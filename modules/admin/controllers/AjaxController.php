<?php

namespace app\modules\admin\controllers;

use app\models\db\Blog;
use app\models\db\WikiPosts;
use yii\web\Controller;

/**
 * Class AjaxController
 * @package app\modules\admin\controllers
 */
class AjaxController extends Controller
{
    public $layout = false;

    /**
     * @return false
     */
    public function actionIndex(): bool
    {
        return false;
    }

    /**
     * @return false|mixed|null
     */
    public function actionCheckUrlForBlog()
    {
        $url      = htmlspecialchars($_GET['url']);
        $material = Blog::find()->where(['url' => $url])->one();

        if ($material) {
            return $material->id;
        }

        return false;
    }

    /**
     * @return string
     */
    public function actionGetPostForModule()
    {
        $id   = htmlspecialchars($_GET['id']);
        $post = Blog::find()->where(['id' => $id])->one();

        return $this->render('get-post-for-module.php', [
            'post' => $post,
        ]);
    }

    /**
     * Поиск для модуля выбора статьи
     *
     * @return string
     */
    public function actionPostSearch()
    {
        $request = htmlspecialchars($_GET['request']);

        // если передана ссылка - удаляем все, кроме uri статьи
        $pos = strpos($request, '.ru/');

        $request = mb_substr($request, 0, -1);

        if ($pos === false) {
            $posts = Blog::find()
                ->where(['like', 'url', $request])
                ->orWhere(['like', 'h1', $request])
                ->orderBy(['id' => SORT_DESC])
                ->asArray()
                ->all();
        } else {
            $request = explode('.ru/', $request);
            $request = end($request);
            $request = mb_substr($request, 0, -1);

            //return $request; // todo

            $posts = Blog::find()
                ->where(['like', 'url', $request])
                ->orderBy(['id' => SORT_DESC])
                ->asArray()
                ->all();
        }

        return $this->render('post-search', [
            'posts' => $posts,
        ]);
    }

    /**
     * Автосохранение
     * Конвертируем, сохраняем в бд и отдаем для сохранения в локал сторейдже
     *
     * @return false|string
     */
    public function actionAutoSave()
    {
        // сохраняемые данные (строку не обрабатываем)
        $saved_data = $_GET["WikiPosts"];

        // сохраняем в бд ?

        return json_encode($saved_data);
    }

    /**
     * Авто загрузка сохраненных данных
     *
     * @return false|string
     */
    public function actionAutoLoad()
    {
        $result = [];

        // проверяем по id, есть ли сохраненная статья. если есть - просто редиректим на нее
        // и там уже проверяем заполненность и заполняем, если что-то не сохранилось
        if (isset($_GET['id'])){
            $post_id = $_GET['id'];
            $wiki_post = WikiPosts::find()->where(['id' => $post_id])->one();

            if ($wiki_post){
                $result['status'] = 'post_found';
                $result['id'] = $wiki_post->id;
                $result['url'] = $wiki_post->url;
            }
        } else {
            $result['status'] = 'post_no_found';
        }

        return json_encode($result);
    }
}