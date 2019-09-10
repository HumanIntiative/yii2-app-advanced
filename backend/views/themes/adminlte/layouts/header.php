<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
$logoMini = Html::tag('span', 'PMP', ['class'=>'logo-mini']);
$logoLg = Html::tag('span', Yii::$app->name, ['class'=>'logo-lg']); ?>

<header class="main-header">
    <?= Html::a($logoMini . $logoLg, Yii::$app->homeUrl, ['class' => 'logo']) ?>
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Timeline -->
                <li class="timeline-menu">
                    <a href="/dashboard/timeline" title="Timeline">
                        <i class="fa fa-flag-o"></i>
                    </a>
                </li>

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <?= \backend\widgets\UserMenu::widget(['asset'=>$directoryAsset]) ?>
                </li>
            </ul>
        </div>
    </nav>
</header>
