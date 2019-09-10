<?php

#if (YII_DEBUG) {
    return [
        'class' => 'backend\components\web\WebUser',
        'identityClass' => 'backend\models\User',
        'enableAutoLogin' => true,
        /*'as enhancement' => [
            'class' => 'backend\components\behaviors\User',
        ],*/
    ];
/*} else {
    return [
        'class' => 'app\components\web\WebUserSaml',
        'identityClass' => 'app\models\User',
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
        'as enhancement' => [
            'class' => 'app\components\behaviors\User',
        ],
    ];
}*/