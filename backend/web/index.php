<?php

error_reporting(E_ALL && ~E_NOTICE);

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

$rootPath = dirname(dirname(dirname(__FILE__)));

require $rootPath . '/vendor/autoload.php';
require $rootPath . '/env.php';
require $rootPath . '/vendor/yiisoft/yii2/Yii.php';
require $rootPath . '/common/config/bootstrap.php';
require $rootPath . '/backend/config/bootstrap.php';

$config = yii\helpers\ArrayHelper::merge(
    require $rootPath . '/common/config/main.php',
    require $rootPath . '/backend/config/main.php'
);

(new yii\web\Application($config))->run();
