<?php

namespace app\widgets;

use app\models\db\Settings;
use yii\base\Widget;

/**
 * @package app\widgets
 */
class GetSettingsWidget extends Widget
{
    public $settings_name;

    /**
     * @return string
     */
    public function run()
    {
        return Settings::find()->where(['name' => $this->settings_name])->one()->value;
    }
}