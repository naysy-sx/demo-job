<?php

namespace app\modules\admin\controllers;

use app\models\forms\SystemSettings;
use yii\filters\VerbFilter;
use yii\web\Controller;

/**
 * Системные настройки
 * @package app\modules\admin\controllers
 */
class SystemSettingsController extends Controller
{
    public $layout = 'admin';

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class'   => VerbFilter::className(),
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
        $model = new SystemSettings;

        return $this->render('index', [
            'model' => $model,
        ]);
    }
}