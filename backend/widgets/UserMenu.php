<?php

namespace backend\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class UserMenu extends Widget
{
    public $asset;

    protected $photoUrl = '//intranet.pkpu.or.id/dev/photo/';

    public function run()
    {
        ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= $this->photoUrl ?>/<?= Yii::$app->user->id ?>.jpg" class="user-image" alt="User Image"/>
            <span class="hidden-xs"><?= !Yii::$app->user->isGuest ? Yii::$app->user->identity->full_name : "Guest" ?></span>
        </a>
        <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
                <img src="<?= $this->photoUrl ?><?= Yii::$app->user->id ?>.jpg" class="img-circle" alt="User Image"/>
                <p>
                    <?= !Yii::$app->user->isGuest ? Yii::$app->user->identity->full_name : "Guest" ?>
                    <small><?= Yii::$app->user->identity->birth_place ?></small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
                <div class="pull-left">
                    <?php $url = sprintf('http://hrm.%s/index.php?r=myInfo/view&id=%s',
                        getenv('DOMAIN_URL'),
                        Yii::$app->user->id
                    ) ?>
                    <?= Html::a('Profile', $url, ['class'=>'btn btn-default btn-flat']) ?>
                </div>
                <div class="pull-right">
                    <form method="post" action="<?= Url::to(['/site/logout']) ?>" class="inline">
                        <?= Html::button('Sign out', [
                            'class' => 'btn btn-default btn-flat',
                            'type' => 'submit',
                            // 'data-method' => 'post',
                            // 'data-request-method' => 'post',
                        ]) ?>
                    </form>
                </div>
            </li>
        </ul>
        <?php
    }
}