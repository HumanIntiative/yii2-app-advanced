<?php

namespace backend\controllers\rbac;

use Yii;
use mdm\admin\controllers\AssignmentController as BaseController;
use common\components\rbac\Assignment;
use yii\helpers\Html;

class AssignmentController extends BaseController
{
    public function init()
    {
        $this->idField = 'id';
        $this->usernameField = 'user_name';
        $this->fullnameField = 'full_name';
        $this->extraColumns = [
            [
                'attribute' => 'full_name',
                'label' => 'Nama',
            ],
            [
                'attribute' => 'role',
                'label' => 'Roles',
                'filter' => $this->getRoleList(),
                'content' => function ($model) {
                    return $this->getUserRoleLinks($model->id);
                },
            ],
            [
                'attribute' => 'user_status',
                'label' => 'Status User',
                'filter' => [1=>'Aktif',0=>'Tidak Aktif'],
                'value' => function ($model, $key, $index, $column) {
                    return $model->user_status==1 ? 'Aktif' : 'Tidak Aktif';
                },
            ],
        ];
        $this->searchClass = 'common\models\search\Employee';

        parent::init();
    }

    protected function getUserRoleLinks($userId)
    {
        $roles = Yii::$app->getAuthManager()->getRolesByUser($userId);

        $links = '';
        foreach ($roles as $roleName => $role) {
            if (!empty($links)) {
                $links .= ', ';
            }
            $links .= Html::a($roleName, ['/admin/role/view', 'id'=>$roleName]);
        }
        return $links;
    }

    protected function getRoleList()
    {
        $roles = Yii::$app->getAuthManager()->getRoles();

        $list = [];
        foreach ($roles as $roleName => $role) {
            $list[$roleName] = $roleName;
        }
        return $list;
    }

    protected function findModel($id)
    {
        $class = $this->userClassName;
        if (($user = $class::findIdentity($id)) !== null) {
            return new Assignment($id, $user);
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}