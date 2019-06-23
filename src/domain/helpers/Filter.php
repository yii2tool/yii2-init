<?php

namespace yii2tool\init\domain\helpers;

use yii\helpers\Inflector;
use yii2rails\extension\console\helpers\Output;
use yii2rails\extension\scenario\collections\ScenarioCollection;
use yii2rails\extension\scenario\helpers\ScenarioHelper;

class Filter {
	
	/**
	 * @param $filters
	 *
	 * @return array|mixed
	 * @throws \yii\base\InvalidConfigException
	 * @throws \yii\web\ServerErrorHttpException
	 */
	public static function allInput($filters)
	{
		$config = [];
		foreach ($filters as $definition) {
            $config = self::runFilter($definition, $config);
		}
		return $config;
	}

    private static function runFilter($definition, $config) {
        if(array_key_exists('title', $definition)) {
            $title = $definition['title'];
            unset($definition['title']);
        } else {
            $className = basename($definition['class']);
            $title = Inflector::titleize($className);
        }
        if($title) {
            Output::line();
            Output::pipe($title);
            Output::line();
        }
        $filterCollection = new ScenarioCollection([$definition]);
        $config = $filterCollection->runAll($config);
    }

}
