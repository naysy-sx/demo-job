<?php

namespace app\controllers;
use yii\web\Controller;
class DemoBlocksController extends Controller
{
	public function actionWebcase()
	{
		$this->layout = 'blog';
		return $this->render('webcase');
	}
}