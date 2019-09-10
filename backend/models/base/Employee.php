<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;
use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "sdm_employee".
 *
 * @property integer $id
 * @property string $user_name
 * @property string $passwd
 * @property string $email
 * @property string $full_name
 * @property integer $user_status
 * @property string $_history
 * @property integer $phone_id
 * @property string $register_date
 * @property integer $branch_id
 * @property string $guid
 * @property integer $is_new_task
 * @property string $activkey
 * @property string $donor_no
 * @property string $address
 * @property string $postal_code
 * @property integer $location_id
 * @property string $npwp_no
 * @property string $npwz_no
 * @property integer $is_donor
 * @property integer $country_id
 * @property integer $fax_id
 * @property integer $bank_account_id
 * @property integer $marketer_id
 * @property integer $donor_type_id
 * @property string $text_searchable
 * @property string $last_login
 * @property integer $is_valid
 * @property string $donor_no_old
 * @property string $website
 * @property integer $phone_mark
 * @property integer $mail_mark
 * @property string $updated_validity
 * @property string $note
 * @property string $alias_name
 * @property integer $is_new
 * @property integer $has_idcard
 * @property integer $remainder_date
 * @property string $remainder_message
 * @property integer $donor_company_id
 * @property string $birth_place
 * @property string $birth_date
 * @property integer $sex
 * @property string $starting_date
 * @property string $ending_date
 * @property integer $is_employee
 * @property integer $position_id
 * @property integer $is_marketer
 * @property integer $employee_type_id
 * @property string $permanent_address
 * @property string $current_phone_no
 * @property string $permanent_phone_no
 * @property string $identity_no
 * @property integer $marital_status
 * @property string $user_image
 * @property integer $branch_id_financial
 * @property integer $is_external_orphan_admin
 * @property string $address_full
 * @property string $phone_no_full
 * @property string $nip
 * @property integer $parent_alias_id
 * @property string $blood_type
 * @property integer $company_id
 * @property string $auth_key
 * @property integer $expired_key
 * @property string $data_source
 * @property integer $created_by
 * @property string $created_stamp
 * @property integer $updated_by
 * @property string $updated_stamp
 *
 * @property \backend\models\Asset[] $assets
 * @property \backend\models\Asset[] $assets0
 * @property \backend\models\AssetUsage[] $assetUsages
 * @property \backend\models\AssetUsage[] $assetUsages0
 * @property \backend\models\AssetUsage[] $assetUsages1
 * @property \backend\models\AssetUsage[] $assetUsages2
 * @property \backend\models\Maintenance[] $maintenances
 * @property \backend\models\Maintenance[] $maintenances0
 * @property \backend\models\Maintenance[] $maintenances1
 * @property \backend\models\Maintenance[] $maintenances2
 * @property \backend\models\MaintenanceType[] $maintenanceTypes
 * @property \backend\models\Request[] $requests
 * @property \backend\models\Request[] $requests0
 * @property \backend\models\Request[] $requests1
 * @property \backend\models\Request[] $requests2
 * @property \backend\models\RequestHistory[] $requestHistories
 * @property \backend\models\TransportUsage[] $transportUsages
 * @property \backend\models\TransportUsage[] $transportUsages0
 * @property \backend\models\Userinfo $userinfo
 * @property \backend\models\Bsc[] $bscs
 * @property \backend\models\BudgetHistory[] $budgetHistories
 * @property \backend\models\Creator[] $creators
 * @property \backend\models\KpiHistory[] $kpiHistories
 * @property \backend\models\StrategicInitiativesHistory[] $strategicInitiativesHistories
 * @property \backend\models\StrategicObjectivesHistory[] $strategicObjectivesHistories
 * @property \backend\models\Payment[] $payments
 * @property \backend\models\Payment[] $payments0
 * @property \backend\models\Procurement[] $procurements
 * @property \backend\models\Procurement[] $procurements0
 * @property \backend\models\Procurement[] $procurements1
 * @property \backend\models\Procurement[] $procurements2
 * @property \backend\models\ProcurementDetail[] $procurementDetails
 * @property \backend\models\ProcurementDetail[] $procurementDetails0
 * @property \backend\models\Comments[] $comments
 * @property \backend\models\Thread[] $threads
 * @property \backend\models\Allowance[] $allowances
 * @property \backend\models\AllowanceSubmit[] $allowanceSubmits
 * @property \backend\models\AmilEmployee[] $amilEmployees
 * @property \backend\models\Bpjs $bpjs
 * @property \backend\models\CooperativeMembers[] $cooperativeMembers
 * @property \backend\models\DebtTransaction[] $debtTransactions
 * @property \backend\models\EmployeeNip $employeeNip
 * @property \backend\models\EmployeeAccount[] $employeeAccounts
 * @property \backend\models\EmployeeCooperative[] $employeeCooperatives
 * @property \backend\models\EmployeeDebt[] $employeeDebts
 * @property \backend\models\LatenessResume[] $latenessResumes
 * @property \backend\models\Leave[] $leaves
 * @property \backend\models\LeaveRecord[] $leaveRecords
 * @property \backend\models\Overtime[] $overtimes
 * @property \backend\models\OvertimeResume[] $overtimeResumes
 * @property \backend\models\PayTakehomeMaster[] $payTakehomeMasters
 * @property \backend\models\Payroll[] $payrolls
 * @property \backend\models\ThpRecord[] $thpRecords
 * @property \backend\models\UpdateProfileLog[] $updateProfileLogs
 * @property \backend\models\UpdateProfileLog[] $updateProfileLogs0
 * @property \backend\models\Accountrecovery[] $accountrecoveries
 * @property \backend\models\Usergrouphead[] $usergroupheads
 * @property \backend\models\Usergroup[] $groupnames
 * @property \backend\models\Usergroupmember[] $usergroupmembers
 * @property \backend\models\Usergrouphead[] $heads
 * @property \backend\models\GroupMember[] $groupMembers
 * @property \backend\models\GroupName[] $groupNames
 * @property \backend\models\MutabaahReport[] $mutabaahReports
 * @property \backend\models\MutabaahTarget[] $mutabaahTargets
 * @property \backend\models\Ipp[] $ipps
 * @property \backend\models\IppMaster[] $ippMasters
 * @property \backend\models\Person $person
 * @property \backend\models\PhoneSellingDonor[] $phoneSellingDonors
 * @property \backend\models\GrwTask[] $grwTasks
 * @property \backend\models\GrwTask[] $grwTasks0
 * @property \backend\models\PhpDonationPreference[] $phpDonationPreferences
 * @property \backend\models\ComBranch $branch
 * @property \backend\models\ComBranch $branchIdFinancial
 * @property \backend\models\Company $company
 * @property \backend\models\SdmEmployeeType $employeeType
 * @property \backend\models\SdmEmployeeExpertise[] $sdmEmployeeExpertises
 * @property \backend\models\SdmEmployeeExtended[] $sdmEmployeeExtendeds
 * @property \backend\models\SdmPositionHistory[] $sdmPositionHistories
 * @property string $aliasModel
 */
abstract class Employee extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sdm_employee';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => BlameableBehavior::className(),
            ],
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_stamp',
                'updatedAtAttribute' => 'updated_stamp',
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_status', 'phone_id', 'branch_id', 'is_new_task', 'location_id', 'is_donor', 'country_id', 'fax_id', 'bank_account_id', 'marketer_id', 'donor_type_id', 'is_valid', 'phone_mark', 'mail_mark', 'is_new', 'has_idcard', 'remainder_date', 'donor_company_id', 'sex', 'is_employee', 'position_id', 'is_marketer', 'employee_type_id', 'marital_status', 'branch_id_financial', 'is_external_orphan_admin', 'parent_alias_id', 'company_id', 'expired_key'], 'integer'],
            [['_history', 'address', 'text_searchable', 'note', 'permanent_address', 'address_full', 'phone_no_full'], 'string'],
            [['register_date', 'last_login', 'updated_validity', 'birth_date', 'starting_date', 'ending_date'], 'safe'],
            [['user_name', 'guid', 'activkey', 'birth_place', 'auth_key'], 'string', 'max' => 40],
            [['passwd', 'email', 'user_image', 'data_source'], 'string', 'max' => 100],
            [['full_name'], 'string', 'max' => 150],
            [['donor_no'], 'string', 'max' => 20],
            [['postal_code'], 'string', 'max' => 10],
            [['npwp_no', 'npwz_no'], 'string', 'max' => 24],
            [['donor_no_old', 'current_phone_no', 'permanent_phone_no'], 'string', 'max' => 15],
            [['website'], 'string', 'max' => 50],
            [['alias_name', 'identity_no'], 'string', 'max' => 30],
            [['remainder_message'], 'string', 'max' => 160],
            [['nip'], 'string', 'max' => 12],
            [['blood_type'], 'string', 'max' => 2],
            [['donor_no'], 'unique'],
            [['email'], 'unique'],
            [['nip'], 'unique'],
            [['user_name'], 'unique'],
            [['branch_id'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id' => 'id']],
            [['branch_id_financial'], 'exist', 'skipOnError' => true, 'targetClass' => Branch::className(), 'targetAttribute' => ['branch_id_financial' => 'id']],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_name' => 'User Name',
            'passwd' => 'Passwd',
            'email' => 'Email',
            'full_name' => 'Full Name',
            'user_status' => 'User Status',
            '_history' => 'History',
            'phone_id' => 'Phone ID',
            'register_date' => 'Register Date',
            'branch_id' => 'Branch ID',
            'guid' => 'Guid',
            'is_new_task' => 'Is New Task',
            'activkey' => 'Activkey',
            'donor_no' => 'Donor No',
            'address' => 'Address',
            'postal_code' => 'Postal Code',
            'location_id' => 'Location ID',
            'npwp_no' => 'Npwp No',
            'npwz_no' => 'Npwz No',
            'is_donor' => 'Is Donor',
            'country_id' => 'Country ID',
            'fax_id' => 'Fax ID',
            'bank_account_id' => 'Bank Account ID',
            'marketer_id' => 'Marketer ID',
            'donor_type_id' => 'Donor Type ID',
            'text_searchable' => 'Text Searchable',
            'last_login' => 'Last Login',
            'is_valid' => 'Is Valid',
            'donor_no_old' => 'Donor No Old',
            'website' => 'Website',
            'phone_mark' => 'Phone Mark',
            'mail_mark' => 'Mail Mark',
            'updated_validity' => 'Updated Validity',
            'note' => 'Note',
            'alias_name' => 'Alias Name',
            'created_by' => 'Created By',
            'created_stamp' => 'Created Stamp',
            'updated_by' => 'Updated By',
            'updated_stamp' => 'Updated Stamp',
            'is_new' => 'Is New',
            'has_idcard' => 'Has Idcard',
            'remainder_date' => 'Remainder Date',
            'remainder_message' => 'Remainder Message',
            'donor_company_id' => 'Donor Company ID',
            'birth_place' => 'Birth Place',
            'birth_date' => 'Birth Date',
            'sex' => 'Sex',
            'starting_date' => 'Starting Date',
            'ending_date' => 'Ending Date',
            'is_employee' => 'Is Employee',
            'position_id' => 'Position ID',
            'is_marketer' => 'Is Marketer',
            'employee_type_id' => 'Employee Type ID',
            'permanent_address' => 'Permanent Address',
            'current_phone_no' => 'Current Phone No',
            'permanent_phone_no' => 'Permanent Phone No',
            'identity_no' => 'Identity No',
            'marital_status' => 'Marital Status',
            'user_image' => 'User Image',
            'branch_id_financial' => 'Branch Id Financial',
            'is_external_orphan_admin' => 'dipakai DATABASEYATIM',
            'address_full' => 'Address Full',
            'phone_no_full' => 'Phone No Full',
            'nip' => 'Nip',
            'parent_alias_id' => 'Parent Alias ID',
            'blood_type' => 'Blood Type',
            'company_id' => 'Company ID',
            'auth_key' => 'Auth Key',
            'expired_key' => 'Expired Key',
            'data_source' => 'Data Source',
        ];
    }
}