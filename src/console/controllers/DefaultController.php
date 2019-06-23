<?php

namespace yii2tool\init\console\controllers;

use yii2rails\extension\console\base\Controller;
use yii2tool\init\domain\helpers\Init;

class DefaultController extends Controller
{
	
	/**
	 * Init project
	 */
	public function actionIndex()
	{
		Init::run();
	}
	
}
