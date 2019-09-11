<?php

namespace common\components\web;

use common\models\Branch;
use mdm\admin\components\Helper;

trait WebUserTrait
{
    public function canAccessRoute($route, $params = [])
    {
        return Helper::checkRoute($route, $params, $this);
    }

    public function canBetween(array $arrRole, $default=false)
    {
        foreach ($arrRole as $roleStr) {
            $default = $default || $this->can($roleStr);
        }

        return $default;
    }

    public function isBranch()
    {
        return $this->identity->branch_id != Branch::PUSAT;
    }

    public function isMarketer()
    {
        if (is_null($this->identity)) return false;

        return $this->identity->is_marketer == 1;
    }
}