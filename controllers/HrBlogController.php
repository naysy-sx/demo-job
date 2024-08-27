<?php

namespace app\controllers;

use app\models\db\Blog;
use yii\web\Controller;

/**
 * Блог
 * @package app\controllers
 */
class HrBlogController extends Controller
{
    /**
     * Все посты
     *
     * @return string
     */
    public function actionIndex()
    {
        $posts = Blog::find()
            ->where(['publish' => 1])
            ->andWhere(['LIKE', 'tags', 'method_materials'])
            ->orderBy(['publish_date' => SORT_DESC])
            ->asArray()
            ->all();

        $posts_exp = Blog::find()
            ->where(['publish' => 1])
            ->andWhere(['LIKE', 'tags', 'expert_articles'])
            ->orderBy(['publish_date' => SORT_DESC])
            ->asArray()
            ->all();

        $posts_videos = Blog::find()
            ->where(['publish' => 1])
            ->andWhere(['LIKE', 'tags', 'video'])
            ->orderBy(['publish_date' => SORT_DESC])
            ->asArray()
            ->all();

        return $this->render('index', [
            'posts'        => $posts,
            'posts_exp'    => $posts_exp,
            'posts_videos' => $posts_videos,
        ]);
    }

    /**
     * @return string|\yii\web\Response
     */
    public function actionView()
    {
        // находим нужную страницу
        $id   = htmlspecialchars($_GET['id']);
        $data = Blog::find()
            //->where(['publish' => 1])
            ->andWhere(['id' => $id])
            ->one();

        // если страницы нет - редиректим на главную
        if (!$data) {
            return $this->redirect(['hr-blog/index']);
        }

        \Yii::$app->view->registerMetaTag([
            'name'    => 'description',
            'content' => $data->meta_description,
        ]);

        // если нашли - редиректим (301й код означает перманентный редирект для того, что бы поисковики выкинули
        // старые (view?id=2) страницы из поиска (если они там есть) и заменили актуальными (hr-blog/12-pravil-effektivnogo-rukovoditelya)
        return $this->redirect('/' . $data['url'], '301');
    }

    /**
     * [ajax] Поиск по блогу
     *
     * @return bool
     */
    public function actionAjaxSearch()
    {
        $this->layout = false;
        $request      = htmlspecialchars($_GET['request']);
        $posts        =
            Blog::find()
                ->where([
                    'like',
                    'title',
                    $request,
                ])
                ->orWhere([
                    'like',
                    'small_description',
                    $request,
                ])
                ->having(['publish' => 1])
                ->asArray()
                ->all();

        $result = '';

        foreach ($posts as $post) {
            $result .= $this->render('_postView', [
                'post' => $post,
            ]);
        }

        return $result;
    }
}