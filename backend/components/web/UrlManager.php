<?php

namespace backend\components\web;

use yii\web\UrlManager as BaseUrlManager;

class UrlManager extends BaseUrlManager
{
    public $enablePrettyUrl = true;
    public $enableStrictParsing = false;
    public $showScriptName = false;

    public function init()
    {
        parent::init();
    }
}
