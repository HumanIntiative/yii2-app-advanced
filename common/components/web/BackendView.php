<?php

namespace common\components\web;

use yii\web\View as BaseView;

class BackendView extends BaseView
{
    public $theme = [
        'pathMap' => ['@app/views' => '@common/themes/adminlte/backend'],
    ];
}