<?php

namespace app\modules\admin\controllers;

use app\models\personal\Editor;
use yii\web\Controller;

class AdminAuthController extends Controller
{
    public $layout = false;

    public function actionIndex()
    {
        $editor = new Editor;
        var_dump($editor->login());
        exit;

        return $this->render('index');
    }
}