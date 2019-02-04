<?php

namespace yii2lab\init\domain\filters\store;

use yii2rails\extension\scenario\base\BaseScenario;
use yii2rails\extension\store\StoreFile;

class EnvLocalConfig extends BaseScenario {

	public $fileAlias = '@common/config/env-local.php';
	
	public function run() {
		$config = $this->getData();
		$store = new StoreFile($this->fileAlias);
		$store->save($config);
	}
	
}
