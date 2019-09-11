<?php

$db = require(Yii::getAlias('@common/config/db.php'));

$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/params.php'
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [],
    'components' => [
        'request' => [
            'cookieValidationKey' => getenv('COOKIE_VALIDATION_KEY'),
        ],
        'user' => require(__DIR__.'/user.php'),
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'class'=>'backend\components\web\UrlManager',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/views/themes/adminlte'
                ],
            ],
            // 'as additional' => 'pkpudev\components\web\ViewBehavior',
        ],
        'db' => $db,
    ],
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
        'gridview' =>  [
            'class' => '\kartik\grid\Module'
        ],
    ],
    'params' => $params,
];
