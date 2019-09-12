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
    'id' => 'app-frontend',
    'name' => 'HI Institute',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'home',
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
            'csrfParam' => '_csrf-frontend',
            'cookieValidationKey' => getenv('COOKIE_VALIDATION_KEY'),
        ],
        'session' => [
            'name' => 'advanced-frontend',
        ],
        'urlManager' => [
            'class'=>'common\components\web\UrlManager',
        ],
        'view' => [
            'class' => 'common\components\web\FrontendView',
        ],
    ],
    /*'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
        ],
    ],*/
];
