<?php

namespace common\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Employee as EmployeeModel;

/**
* Employee represents the model behind the search form about `common\models\Employee`.
*/
class Employee extends EmployeeModel
{
    /**
    * Untuk filter RBAC Assignment
    */
    public $role;

    /**
    * @inheritdoc
    */
    public function rules()
    {
        return [
            [['id', 'user_status', 'phone_id', 'branch_id', 'is_new_task', 'location_id', 'is_donor', 'country_id', 'fax_id', 'bank_account_id', 'marketer_id', 'donor_type_id', 'is_valid', 'phone_mark', 'mail_mark', 'created_by', 'updated_by', 'is_new', 'has_idcard', 'remainder_date', 'donor_company_id', 'sex', 'is_employee', 'position_id', 'is_marketer', 'employee_type_id', 'marital_status', 'branch_id_financial', 'is_external_orphan_admin', 'parent_alias_id', 'company_id', 'expired_key'], 'integer'],
            [['user_name', 'passwd', 'email', 'full_name', '_history', 'register_date', 'guid', 'activkey', 'donor_no', 'address', 'postal_code', 'npwp_no', 'npwz_no', 'text_searchable', 'last_login', 'donor_no_old', 'website', 'updated_validity', 'note', 'alias_name', 'created_stamp', 'updated_stamp', 'remainder_message', 'birth_place', 'birth_date', 'starting_date', 'ending_date', 'permanent_address', 'current_phone_no', 'permanent_phone_no', 'identity_no', 'user_image', 'address_full', 'phone_no_full', 'nip', 'blood_type', 'auth_key', 'data_source', 'role'], 'safe'],
        ];
    }

    /**
    * @inheritdoc
    */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
    * Creates data provider instance with search query applied
    *
    * @param array $params
    *
    * @return ActiveDataProvider
    */
    public function search($params)
    {
        $query = EmployeeModel::find()->where(['user_status'=>1]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $this->filterRole($query, $this->role);

        $query->andFilterWhere([
            'id' => $this->id,
            'user_status' => $this->user_status,
            'phone_id' => $this->phone_id,
            'register_date' => $this->register_date,
            'branch_id' => $this->branch_id,
            'is_new_task' => $this->is_new_task,
            'location_id' => $this->location_id,
            'is_donor' => $this->is_donor,
            'country_id' => $this->country_id,
            'fax_id' => $this->fax_id,
            'bank_account_id' => $this->bank_account_id,
            'marketer_id' => $this->marketer_id,
            'donor_type_id' => $this->donor_type_id,
            'last_login' => $this->last_login,
            'is_valid' => $this->is_valid,
            'phone_mark' => $this->phone_mark,
            'mail_mark' => $this->mail_mark,
            'updated_validity' => $this->updated_validity,
            'created_by' => $this->created_by,
            'created_stamp' => $this->created_stamp,
            'updated_by' => $this->updated_by,
            'updated_stamp' => $this->updated_stamp,
            'is_new' => $this->is_new,
            'has_idcard' => $this->has_idcard,
            'remainder_date' => $this->remainder_date,
            'donor_company_id' => $this->donor_company_id,
            'birth_date' => $this->birth_date,
            'sex' => $this->sex,
            'starting_date' => $this->starting_date,
            'ending_date' => $this->ending_date,
            'is_employee' => $this->is_employee,
            'position_id' => $this->position_id,
            'is_marketer' => $this->is_marketer,
            'employee_type_id' => $this->employee_type_id,
            'marital_status' => $this->marital_status,
            'branch_id_financial' => $this->branch_id_financial,
            'is_external_orphan_admin' => $this->is_external_orphan_admin,
            'parent_alias_id' => $this->parent_alias_id,
            'company_id' => $this->company_id,
            'expired_key' => $this->expired_key,
        ]);

        $query->andFilterWhere(['ilike', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'passwd', $this->passwd])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['ilike', 'full_name', $this->full_name])
            ->andFilterWhere(['like', 'activkey', $this->activkey])
            ->andFilterWhere(['like', 'donor_no', $this->donor_no])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'postal_code', $this->postal_code])
            ->andFilterWhere(['like', 'npwp_no', $this->npwp_no])
            ->andFilterWhere(['like', 'npwz_no', $this->npwz_no])
            ->andFilterWhere(['like', 'text_searchable', $this->text_searchable])
            ->andFilterWhere(['like', 'donor_no_old', $this->donor_no_old])
            ->andFilterWhere(['like', 'website', $this->website])
            ->andFilterWhere(['like', 'note', $this->note])
            ->andFilterWhere(['like', 'alias_name', $this->alias_name])
            ->andFilterWhere(['like', 'remainder_message', $this->remainder_message])
            ->andFilterWhere(['like', 'birth_place', $this->birth_place])
            ->andFilterWhere(['like', 'permanent_address', $this->permanent_address])
            ->andFilterWhere(['like', 'current_phone_no', $this->current_phone_no])
            ->andFilterWhere(['like', 'permanent_phone_no', $this->permanent_phone_no])
            ->andFilterWhere(['like', 'identity_no', $this->identity_no])
            ->andFilterWhere(['like', 'user_image', $this->user_image])
            ->andFilterWhere(['like', 'address_full', $this->address_full])
            ->andFilterWhere(['like', 'phone_no_full', $this->phone_no_full])
            ->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'blood_type', $this->blood_type])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'data_source', $this->data_source]);
        
        // For Api select2
        if ($params['q']) {
            $query->andFilterWhere(['or',
                ['ilike', 'full_name', $params['q']],
                ['ilike', 'nip', $params['q']],
            ]);
        }

        return $dataProvider;
    }

    protected function filterRole(&$query, $role)
    {
        if (empty($role)) {
            return;
        }

        $userIds = Yii::$app->getAuthManager()->getUserIdsByRole($role);
        if (empty($userIds)) {
            $query->where('0=1');
        } else {
            $query->andWhere(['in', 'id', $userIds]);
        }
    }
}