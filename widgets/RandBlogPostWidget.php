<?php
namespace app\widgets;

use app\models\db\Blog;
use yii\base\Widget;
use yii\db\Expression;

/**
 * Виджет рандомных статей внизу страниц HR-блог
 *
 * @package app\widgets
 */
class RandBlogPostWidget extends Widget
{
    /**
     * @return string
     */
    public function run()
    {
        $posts = Blog::find()
            ->where(['publish' => 1])                         // условия поиска (опубликовано = 1)
            //->andWhere(['>', 'publish', 1675209600])                         // условия поиска (опубликовано = 1)
            ->orderBy(new Expression('rand()'))               // среди них ищем рандомные
            ->limit(3)                                        // не более 3-х постов
            ->asArray()                                       // удаляем все лишнее, оставляя только финальный массив
            ->all();                                          // все

        return $this->render("../../views/hr-blog/_randBottomPostView", [
            'posts' => $posts,
        ]);
    }
}