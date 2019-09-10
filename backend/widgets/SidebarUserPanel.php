<?php

namespace backend\widgets;

use Yii;
use yii\base\Widget;

class SidebarUserPanel extends Widget
{
    public $asset;

    protected $photoUrl = '//intranet.pkpu.or.id/dev/photo/';

    public function run()
    {
        ?>
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $this->photoUrl ?>/<?= Yii::$app->user->id ?>.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?php echo !Yii::$app->user->isGuest ? Yii::$app->user->identity->user_name : 'Guest' ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Profile</a>
            </div>
        </div>
        <?php
    }
}