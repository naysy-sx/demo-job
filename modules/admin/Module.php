<?php

namespace app\modules\admin;

/**
 * Class Module
 * @package app\modules\admin
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\admin\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        $settings = new Settings;

        // если админка включена
        if ($settings->status == 1){
            // проверяем тип авторизации и передаем на визуал
//            if ($settings->auth_type == 'js') {
//                echo $this->render('...');
//            }

            parent::init();
        } else {
            exit;
        }
    }
}
