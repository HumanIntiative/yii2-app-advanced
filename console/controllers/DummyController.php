<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;
use Faker\Factory;

class DummyController extends Controller
{
    public $faker;

    public function init()
    {
        parent::init();
        $this->faker = Factory::create('id_ID');
    }

    public function actionEmployee()
    {
        $totalData = 300;
        $dummyData = [];
        $fields = [
            'user_name',        'passwd',            'email',
            'full_name',        'user_status',        /*'guid',*/
            'address',            'location_id',        'is_donor',
            'country_id',        'birth_place',        'birth_date',
            'sex',                'starting_date',    'is_employee',
            'is_marketer',        'employee_type_id', 'current_phone_no',
            'marital_status',    'nip',                'blood_type',
            'company_id',
        ];
        $genders = ['male', 'female'];

        echo "--- Starting ...\r\n";

        for ($emp=0; $emp<$totalData; $emp++) {
            $jk = $this->faker->numberBetween(0, 1); //Gender
            $firstName = $this->faker->firstName($genders[$jk]);
            $lastName = $this->faker->lastName;
            $userName = strtolower($firstName) . '.' . strtolower($lastName);
            $startDate = $this->faker->dateTimeBetween('-5 years');

            $data = [
                $userName,
                md5($userName),
                $userName."@gmail.com",
                "$firstName $lastName",
                $this->faker->biasedNumberBetween(0, 1),
                /*$this->faker->uuid,*/
                $this->faker->address,
                $this->faker->optional(0.9)->numberBetween(100, 999),
                $this->faker->numberBetween(0, 1),
                100, //Indonesia
                str_replace('Administrasi ', '', $this->faker->city),
                $this->faker->dateTimeBetween('-28 years')->format('Y-m-d H:i:s'),
                $jk,
                $startDate->format('Y-m-d H:i:s'), //
                $this->faker->numberBetween(0, 1),
                $this->faker->numberBetween(0, 1),
                $this->faker->numberBetween(1, 4),
                $this->faker->e164PhoneNumber,
                $this->faker->numberBetween(0, 1),
                str_pad($this->faker->numberBetween(1, 25), 4, '0', STR_PAD_LEFT) . '.' . $startDate->format('m') . '.' . $startDate->format('Y'),
                $this->faker->randomElement(['A', 'B', 'AB', 'O']),
                $this->faker->numberBetween(1, 2),
            ];
            array_push($dummyData, $data);
        }

        Yii::$app->db->createCommand()->batchInsert('sdm_employee', $fields, $dummyData)->execute();

        echo '--- Success Adding ' . $totalData . " Employee Data\r\n";
    }
}
