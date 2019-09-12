<?php

namespace common\components\web;

use yii\web\View as BaseView;

class FrontendView extends BaseView
{
    public $theme = [
        'pathMap' => ['@app/views' => '@common/themes/adminlte/frontend'],
    ];
}