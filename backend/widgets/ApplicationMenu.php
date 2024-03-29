<?php

namespace backend\widgets;

use dmstr\widgets\Menu;
use yii\base\Widget;

class ApplicationMenu extends Widget
{
    public function run()
    {
        // Vars
        $user = \Yii::$app->user;

        // Generate Widget
        echo Menu::widget([
            'options'=>['class'=>'sidebar-menu'],
            'items'=>[
                // ['label'=>'MAIN NAVIGATION', 'options'=>['class'=>'header']],
                ['label'=>'Dashboard', 'icon'=>'dashboard', 'url'=>['/']],
                [
                    'label'=>'Setting',
                    'icon'=>'gears',
                    'url'=>'#',
                    // 'visible'=>$user->can('/setting/*'),
                    'items'=>[],
                ],
                [
                    'label'=>'Otorisasi',
                    'icon'=>'unlock-alt',
                    'url'=>'#',
                    'visible'=>$user->can('/admin/*'),
                    'items'=>[
                        [
                            'label'=>'Assignment',
                            'icon'=>'users',
                            'url'=>['/admin/assignment'],
                        ],
                        [
                            'label'=>'Role',
                            'icon'=>'user',
                            'url'=>['/admin/role'],
                        ],
                        [
                            'label'=>'Permission',
                            'icon'=>'tasks',
                            'url'=>['/admin/permission'],
                        ],
                        [
                            'label'=>'Route',
                            'icon'=>'link',
                            'url'=>['/admin/route'],
                        ],
                        [
                            'label'=>'Rule',
                            'icon'=>'map-o',
                            'url'=>['/admin/rule'],
                        ],
                    ],
                ]
            ],
        ]);
    }
}
