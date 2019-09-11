<?php

namespace common\modules;

use mdm\admin\Module;

class AdminModule extends Module
{
    public function init()
    {
        parent::init();

        // Override
        $this->basePath = \Yii::getAlias('@vendor/mdmsoft/yii2-admin');
        $this->controllerMap = [
            'assignment' => ['class' => 'common\rbac\AssignmentController'],
            'role' => ['class' => 'common\rbac\RoleController'],
        ];
    }
}