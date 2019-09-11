<?php

namespace common\components\web;

use yii\web\View as BaseView;

class View extends BaseView
{
    public $theme = [
        'pathMap' => ['@app/views' => '@common/themes/adminlte'],
    ];
}