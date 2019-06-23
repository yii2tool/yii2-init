<?php

namespace yii2tool\init\console\controllers;

use yii2rails\extension\console\base\Controller;
use yii2tool\init\domain\helpers\CheckYiiRequirements;

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
