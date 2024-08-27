<?php

namespace app\widgets;

use yii\base\Widget;

/**
 * @package app\widgets
 */
class TestWidget extends Widget
{
    public $point;

    /**
     * @return string
     */
    public function run()
    {
        $data = ['test' => $this->point];

        return $this->render('TestWidget', [
            'data' => $data,
        ]);
    }
}