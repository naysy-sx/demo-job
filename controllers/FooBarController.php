<?php

namespace app\controllers;
use yii\web\Controller;
class FooBarController extends Controller
{
	public $layout = "blog";
	public function actionBazz() // bazz.php
	{
		return $this->render('bazz');
	}
}