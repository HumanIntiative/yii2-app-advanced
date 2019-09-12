<?php

$auth = require(Yii::getAlias('@common/config/auth.php'));
$db   = require(Yii::getAlias('@common/config/db.php'));
$log  = require(Yii::getAlias('@common/config/log.php'));
$user = require(Yii::getAlias('@common/config/user.php'));

$params = array_merge(
    require Yii::getAlias('@common/config/params.php'),
    require __DIR__ . '/params.php'
);

return [
    'id' => 'app-backend',
    'name' => 'HI Institute',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'defaultRoute' => 'dashboard',
    'params' => $params,
    'components' => [
        'authManager' => $auth,
        'db' => $db,
        'log' => $log,
        'user' => $user,
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'request' => [
            'cookieValidationKey' => getenv('COOKIE_VALIDATION_KEY'),
        ],
        'session' => [
            'name' => 'advanced-backend',
        ],
        'urlManager' => [
            'class'=>'common\components\web\UrlManager',
        ],
        'view' => [
            'class' => 'common\components\web\BackendView',
        ],
    ],
    'modules' => [
        'admin' => [
            'class' => 'common\modules\AdminModule',
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
        ],
    ],
];
