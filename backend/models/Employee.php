<?php

namespace backend\models;

use backend\models\base\Employee as BaseEmployee;
use backend\models\view\VwEmployeeManager;
use pkpudev\components\data\QueryCollection;

/**
 * This is the model class for table "sdm_employee".
 */
class Employee extends BaseEmployee
{
    const MITRA = 3;
    const MITRA_MARKETING = 6;
    const RELAWAN = 4;

    /*public static function find()
    {
        return new query\EmployeeQuery(get_called_class());
    }*/

    public static function collection()
    {
        $query = static::find()->employee(Employee::MITRA_MARKETING);
        return \Yii::$app->cache->getOrSet('collemployee126', function() use ($query) {
            return new QueryCollection($query);
        });
    }

    public static function only($userId)
    {
        $query = static::find()->where(['id'=>$userId]);
        return new QueryCollection($query);
    }

    public function fields()
    {
        return [
            'id',
            'user_name',
            'full_name',
            'email',
            'user_status',
            'nip'
        ];
    }

    public function getPosition_detail()
    {
        return ($position = $this->position) ?
            sprintf('%s - %s', $position->position_name, $position->department) :
            ' - ';
    }

    public function getContact_detail()
    {
        return $this->full_name ? $this->full_name . " "
            . "("
            . "No HP: <a href='tel:".$this->current_phone_no."'>".$this->current_phone_no."</a>, "
            . "Email: <a href='mailto:".$this->pkpuEmail."'>".$this->pkpuEmail."</a>"
            . ")"
            : null;
    }

    //
    // Relations
    //

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBranch()
    {
        return $this->hasOne(\backend\models\Branch::className(), ['id' => 'branch_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(\backend\models\Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(\backend\models\view\VwPosition::className(), ['employee_id' => 'id']);
    }
}
