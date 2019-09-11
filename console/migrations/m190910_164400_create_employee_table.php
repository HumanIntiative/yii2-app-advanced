<?php

use yii\db\Migration;

/**
 * Handles the creation of table `employee`.
 */
class m190910_164400_create_employee_table extends Migration
{
    public $tableName = 'sdm_employee';

    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'user_name' => $this->string(40),
            'passwd' => $this->string(100),
            'email' => $this->string(100),
            'full_name' => $this->string(150),
            'user_status' => $this->integer()->defaultValue(0),
            'phone_id' => $this->integer(),
            'register_date' => $this->dateTime(),
            'branch_id' => $this->integer(),
            // 'guid' => $this->string(40) . ' DEFAULT uuid_generate_v4()', //create migration for extensions, but build images with package postgres-contrib
            'is_new_task' => $this->smallInteger()->defaultValue(0),
            'activkey' => $this->string(40),
            'donor_no' => $this->string(20),
            'address' => $this->text(),
            'postal_code' => $this->string(10),
            'location_id' => $this->integer(),
            'npwp_no' => $this->string(24),
            'npwz_no' => $this->string(24),
            'is_donor' => $this->integer()->defaultValue(1),
            'country_id' => $this->integer()->defaultValue(100),
            'fax_id' => $this->integer(),
            'bank_account_id' => $this->integer(),
            'marketer_id' => $this->integer(),
            'donor_type_id' => $this->integer(),
            'text_searchable' => $this->text(),
            'last_login' => $this->date(),
            'is_valid' => $this->smallInteger(),
            'donor_no_old' => $this->string(15),
            'website' => $this->string(50),
            'phone_mark' => $this->smallInteger()->defaultValue(0),
            'mail_mark' => $this->smallInteger()->defaultValue(1),
            'updated_validity' => $this->dateTime(),
            'note' => $this->text(),
            'alias_name' => $this->string(30),
            'created_by' => $this->integer(),
            'created_stamp' => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_stamp' => $this->dateTime(),
            'is_new' => $this->smallInteger()->defaultValue(1),
            'has_idcard' => $this->smallInteger()->defaultValue(0),
            'remainder_date' => $this->smallInteger(),
            'remainder_message' => $this->string(160),
            'donor_company_id' => $this->integer(),
            'birth_place' => $this->string(40),
            'birth_date' => $this->date(),
            'sex' => $this->integer(),
            'starting_date' => $this->date(),
            'ending_date' => $this->date(),
            'is_employee' => $this->integer()->defaultValue(1),
            'position_id' => $this->integer(),
            'is_marketer' => $this->integer()->defaultValue(0),
            'employee_type_id' => $this->integer()->defaultValue(4),
            'permanent_address' => $this->text(),
            'current_phone_no' => $this->string(15),
            'permanent_phone_no' => $this->string(15),
            'identity_no' => $this->string(30),
            'marital_status' => $this->integer()->defaultValue(0),
            'user_image' => $this->char(100),
            'branch_id_financial' => $this->integer(),
            'is_external_orphan_admin' => $this->smallInteger()->notNull()->defaultValue(0), // dipakai DATABASEYATIM
            'address_full' => $this->text(),
            'phone_no_full' => $this->text(),
            'nip' => $this->string(12),
            'parent_alias_id' => $this->integer(),
            'blood_type' => $this->string(2),
            'company_id' => $this->integer()->notNull()->defaultValue(1),
            'auth_key' => $this->string(40),
            'expired_key' => $this->integer(),
            'data_source' => $this->string(100),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
