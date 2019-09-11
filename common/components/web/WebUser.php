<?php

namespace common\components\web;

use yii\web\User as BaseUser;

class WebUser extends BaseUser
{
    use WebUserTrait;
}