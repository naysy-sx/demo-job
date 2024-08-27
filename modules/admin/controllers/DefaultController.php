<?php

namespace app\modules\admin\controllers;

use app\models\personal\Editor;
use yii\web\Controller;

/**
 * @package app\modules\admin\controllers
 */
class DefaultController extends Controller
{
    public $layout = 'admin';

    /**
     * @param \yii\base\Action $action
     *
     * @return bool
     * @throws \yii\web\BadRequestHttpException
     */
    public function beforeAction($action)
    {
//        $editor = new Editor;

//        if (!$editor->check()){
//            return $this->redirect(['/admin/admin-auth']);
//        }

        return parent::beforeAction($action);
    }

    /**
     * Главная админки
     *
     * @return bool|string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
