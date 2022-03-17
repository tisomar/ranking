<?php

use Illuminate\Database\Seeder;
use App\PersonalRecord;

class PersonalRecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 1,
                'value' => '100.0',
                'date' => '2021-01-01 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 1,
                'value' => '180.0',
                'date' => '2021-01-02 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );
        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 1,
                'value' => '150.0',
                'date' => '2021-01-03 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 1,
                'value' => '110.0',
                'date' => '2021-01-04 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 2,
                'movement_id' => 1,
                'value' => '110.0',
                'date' => '2021-01-04 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 2,
                'movement_id' => 1,
                'value' => '140.0',
                'date' => '2021-01-05 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 2,
                'movement_id' => 1,
                'value' => '190.0',
                'date' => '2021-01-06 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 3,
                'movement_id' => 1,
                'value' => '170.0',
                'date' => '2021-01-01 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 3,
                'movement_id' => 1,
                'value' => '120.0',
                'date' => '2021-01-02 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 3,
                'movement_id' => 1,
                'value' => '130.0',
                'date' => '2021-01-03 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 2,
                'value' => '130.0',
                'date' => '2021-01-03 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 2,
                'movement_id' => 2,
                'value' => '130.0',
                'date' => '2021-01-03 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 3,
                'movement_id' => 2,
                'value' => '125.0',
                'date' => '2021-01-03 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 2,
                'value' => '110.0',
                'date' => '2021-01-05 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 1,
                'movement_id' => 2,
                'value' => '100.0',
                'date' => '2021-01-01 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 2,
                'movement_id' => 2,
                'value' => '120.0',
                'date' => '2021-01-01 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        PersonalRecord::create([
                'user_id' => 3,
                'movement_id' => 2,
                'value' => '120.0',
                'date' => '2021-01-01 00:00:00.0',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

    }
}
