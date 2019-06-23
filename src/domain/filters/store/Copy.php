<?php

namespace yii2tool\init\domain\filters\store;

use yii2rails\extension\scenario\base\BaseScenario;

class Copy extends BaseScenario {
	
	public $paths = [];
	
	public function run() {
		$copyFiles = new \yii2rails\extension\console\helpers\CopyFiles;
		foreach($this->paths as $directory) {
			$copyFiles->copyAllFiles($directory);
		}
	}
	
}
