<?php

namespace yii2tool\init\admin;

use yii2lab\applicationTemplate\common\enums\ApplicationPermissionEnum;
use yii2rails\extension\web\helpers\Behavior;

/**
 * Class Module
 * 
 * @package yii2tool\init\admin
 */
class Module extends \yii\base\Module {

    public function behaviors()
    {
        return [
            'access' => Behavior::access(ApplicationPermissionEnum::BACKEND_ALL),
        ];
    }

}