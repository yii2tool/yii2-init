<?php

namespace yii2lab\init\console\controllers;

use yii2rails\extension\console\base\Controller;
use yii2lab\init\domain\helpers\CheckYiiRequirements;

class RequirementsController extends Controller
{
	
	/**
	 * Check project requirements
	 */
	public function actionIndex()
	{
		CheckYiiRequirements::run()->render();
	}
	
}
