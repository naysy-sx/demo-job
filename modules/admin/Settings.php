<?php

namespace app\modules\admin;

use app\models\SimpleSettings;

/**
 * Настройки
 * @package app\modules\admin
 */
class Settings
{
    public $password;
    public $status;
    public $auth_type;

    public function __construct()
    {
        $this->status    = SimpleSettings::get('admin-enable');
        $this->password  = SimpleSettings::get('panel-pass');
        $this->auth_type = SimpleSettings::get('auth-type');
    }

    /**
     * Проверка пароля
     *
     * @param $usr_pass
     *
     * @return bool
     */
    public function checkPass($usr_pass): bool
    {
        if ($usr_pass == $this->password) {
            return true;
        }

        return false;
    }

    /**
     * Смена типа авторизации (для api)
     *
     * @param $type
     *
     * @return bool
     */
    public function changeAuthType($type): bool
    {
        $this->auth_type = $type;

        return true;
    }
}