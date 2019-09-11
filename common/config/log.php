<?php

return [
    'traceLevel' => getenv('YII_DEBUG')==1 ? 3 : 0,
    'targets' => [
        [
            'class' => 'yii\log\FileTarget',
            'levels' => ['error', 'warning'],
        ],
    ],
];