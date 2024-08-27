<?php

namespace app\controllers;

use app\models\db\Blog;
use yii\web\Controller;

/**
 * @package app\controllers
 */
class AjaxSearchController extends Controller
{
    public $layout = false;

    /**
     * @return string
     */
    public function actionIndex()
    {
        $request = htmlspecialchars($_GET['request']);
        $result = '';

        $posts = Blog::find()
            ->where(['like', 'title', $request])
            ->orWhere(['like', 'small_description', $request])
            ->having(['publish' => 1])
            ->orderBy(['publish_date' => SORT_DESC])
            ->asArray()
            ->all();

        foreach ($posts as $post) {
            $result .= $this->render('//hr-blog/_postView', [
                'post' => $post,
            ]);
        }

        return $result;
    }
}