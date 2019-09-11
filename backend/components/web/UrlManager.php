<?php

namespace backend\components\web;

use yii\web\UrlManager as BaseUrlManager;

class UrlManager extends BaseUrlManager
{
    public $enablePrettyUrl = true;
    public $enableStrictParsing = false;
    public $showScriptName = false;
    public $rules = [
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
    ];
}
