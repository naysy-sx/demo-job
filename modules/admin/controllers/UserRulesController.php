<?php

namespace app\modules\admin\controllers;

use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Настройки прав и ролей
 * @package app\modules\admin\controllers
 */
class UserRulesController extends Controller
{
    public $layout = 'admin';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        return $this->redirect(['/admin/rules/']); exit;
        return $this->render('index');
    }
}