<?php

/*
 * @link http://www.diemeisterei.de/
 * @copyright Copyright (c) 2016 diemeisterei GmbH, Stuttgart
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/* @var $this yii\web\View */

$this->title .= 'Home';
?>

<div class="site-index">

    <div class="jumbotron">
        <div class="container">
            <h1><?= getenv('APP_TITLE') ?></h1>
            <p>
                <?php /*\yii\helpers\Html::a(
                    'GitHub Project',
                    'https://github.com/dmstr/docker-yii2-app',
                    [
                        'target' => '_blank',
                        'class' => 'btn btn-primary'
                    ])*/ ?>

            </p>
        </div>
    </div>
    <div class="container">
        <h3>Dashboard Here</h3>
        <!-- 
        <h3>Start development bash</h3>
        <p class="well">
            <code>
                docker-compose run php bash
            </code>
        </p>
        <h3>Install packages</h3>
        <p class="well">
            <code>
                $ composer require "nterms/yii2-mailqueue"
            </code>
        </p>
        <h3>IP</h3>
        <p class="well">
            <code><?= Yii::$app->request->userIP ?></code>
        </p>
         -->
    </div>

</div>
