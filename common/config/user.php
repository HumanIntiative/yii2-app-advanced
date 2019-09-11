<?php

if (getenv('YII_DEBUG')==1) {
    return [
        'class' => 'common\components\web\WebUser',
        'identityClass' => 'common\models\User',
        'enableAutoLogin' => true,
    ];
} else {
    return [
        'class' => 'common\components\web\WebUserSaml',
        'identityClass' => 'common\models\User',
        'autoloaderPath'=>'/var/www/simplesamlphp/1.14.11/lib/_autoload.php',
        'authSource'=>'cmn-client',
        'attributesConfig'=>array(
            'id'=>'id',
            'username'=>'user_name',
            'name'=>'full_name',
            'fullname'=>'full_name',
            'email'=>'email',
            'branchId'=>'branch_id',
            'type'=>'type',
            'companyId'=>'company_id',
        ),
        'superuserCheck' => true,
        'superuserPermissionName' => 'superuserAccess',
    ];
}