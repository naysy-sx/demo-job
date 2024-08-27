<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;

/**
 * Class AjaxLoadFileController
 * @package app\controllers
 */
class AjaxLoadFileController extends Controller
{
    public $layout = false;

    /**
     * @inheritdoc
     */
    public function beforeAction($action)
    {
        $this->enableCsrfValidation = false;

        return parent::beforeAction($action);
    }

    /**
     * @return false|string
     */
    public function actionIndex()
    {
        $new_file_name = trim($_FILES['file']['name']);
        $rand = rand(10000, 999999);
        $new_file_name = md5($new_file_name . $rand);

        $ext        = explode('.', $_FILES['file']['name']);
        $ext        = end($ext);
        $final_path = 'uploads_for_posts/' . $new_file_name . '.' . $ext;

        move_uploaded_file($_FILES['file']['tmp_name'], $final_path);

        // 3. Формирование массива на возврат
        $res = [
            'fileName' => $_FILES['file']['name'],
            'filePath' => $final_path,
            'status'   => 'ok',
        ];

        return json_encode($res);
    }
}