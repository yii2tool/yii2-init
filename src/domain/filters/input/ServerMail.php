<?php

namespace yii2lab\init\domain\filters\input;

use yii2rails\extension\scenario\base\BaseScenario;

class ServerMail extends BaseScenario {

	public $default = [];
	
	public function run() {
		$config = $this->getData();
		$config['servers']['mail'] = $this->default;
		$this->setData($config);
	}
	
}
