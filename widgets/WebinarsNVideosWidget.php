<?php
namespace app\widgets;

use app\models\db\Blog;
use app\models\db\Video;
use yii\base\Widget;
use yii\db\Expression;

/**
 * Виджет рандомных статей внизу страниц HR-блог
 *
 * @package app\widgets
 */
class WebinarsNVideosWidget extends Widget
{
    /**
     * @return string
     */
    public function run()
    {
        $data = Video::find()->limit(8)->asArray()->all();

        return $this->render("WebinarsNVideosWidget", [
            'data' => $data,
        ]);
    }
}