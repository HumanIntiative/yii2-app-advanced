<?php

namespace backend\controllers\rbac;

use Yii;
use common\components\rbac\AuthItem;
use mdm\admin\controllers\RoleController as BaseRoleController;
use yii\web\NotFoundHttpException;

/**
 * RoleController implements the CRUD actions for AuthItem model.
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class RoleController extends BaseRoleController
{
    protected function findModel($id)
    {
        $auth = Yii::$app->getAuthManager();
        $item = $auth->getRole($id);
        if ($item) {
            return new AuthItem($item);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
