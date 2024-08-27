<?php

namespace app\controllers;

use app\models\db\WikiPosts;
use yii\web\Controller;

/**
 * Wiki
 * @package app\controllers
 */
class WikiController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @return string
     */
    public function actionView()
    {
        $id   = htmlspecialchars($_GET['id']);
        $data = WikiPosts::find()
            ->andWhere(['id' => $id])
            ->one();

        return $this->redirect('/' . $data['url'], '301');
    }
}