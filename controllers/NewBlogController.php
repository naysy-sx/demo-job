<?php

namespace app\controllers;

use app\models\db\Blog;
use yii\web\Controller;

/**
 * Тест-версия блога
 * @package app\controllers
 */
class NewBlogController extends Controller
{
    public $layout         = 'blog';
    public $posts_per_page = 9;

    /**
     * Главная страница
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $posts_count = Blog::find()->count();

        $posts = Blog::find()
            ->limit($this->posts_per_page)
            ->asArray()
            ->all();

        return $this->render('index', [
            'posts'            => $posts,
            'posts_count'      => $posts_count,
            'posts_page_limit' => $this->posts_per_page,
        ]);
    }

    /**
     * @return mixed
     */
    public function actionView()
    {
        return $this->render('view');
    }

    /**
     * @return string
     */
    public function actionAjaxGetPosts()
    {
        $this->layout = false;
        $page   = htmlspecialchars($_GET['page']) * 1;
        $result = "";
        $offset = $page * $this->posts_per_page - $this->posts_per_page;
        $posts  = Blog::find()
            ->offset($offset)
            ->limit($this->posts_per_page)
            ->asArray()
            ->all();

        foreach ($posts as $post) {
            $result .= $this->render('_postView', [
                'post' => $post,
            ]);
        }

        return $result;
    }
}
