<?php

namespace app\controllers;

use app\models\db\Video;
use yii\web\Controller;

/**
 * Class VideoController
 * @package app\controllers
 */
class VideoController extends Controller
{
    /**
     * Главная - все видео
     *
     * @return string
     */
    public function actionIndex()
    {
        $videos = Video::find()->asArray()->all();

        return $this->render('index', [
            'videos' => $videos,
        ]);
    }

    /**
     * Обзор конкретного видео
     *
     * @return string
     */
    public function actionView()
    { exit; // Алиса сказала, что страница обзора не нужна =)
        $id    = htmlspecialchars($_GET['id']);
        $video = Video::find()->where(['id' => $id])->one();

        return $this->render('index', [
            'video' => $video,
        ]);
    }
}