<?php

namespace app\modules\admin\models;

use app\models\db\Rules;

/**
 * Системная изменялка роли для процессов
 * @package app\modules\admin\models
 */
class ModifyRules
{
    public $old;
    public $new;

    public function __construct()
    {
        session_start();
        $this->old = $_SESSION['rule'];
    }

    /**
     * @param $name
     */
    public function newRule($name)
    {
        session_start();
        $_SESSION['rule'] = $name;
    }

    /**
     * @return bool
     */
    public function reset(): bool
    {
        return true;
    }

    /**
     * @param $name
     *
     * @return array|\yii\db\ActiveRecord|null
     */
    public function getInfo($name)
    {
        return Rules::find()->where(['name' => $name])->one();
    }
}