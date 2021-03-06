<?php

namespace yii2tool\init\admin\helpers;

use yii2rails\extension\menu\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['init/requirements', 'title'],
			'url' => 'init/requirements',
			'module' => 'init',
		];
	}

}
