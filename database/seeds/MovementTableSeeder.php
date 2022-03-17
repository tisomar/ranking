<?php

use Illuminate\Database\Seeder;
use App\Movement;

class MovementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Movement::create([
                'id' => 1,
                'name' => 'Deadlift',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        Movement::create([
                'id' => 2,
                'name' => 'Back Squat',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        Movement::create([
                'id' => 3,
                'name' => 'Bench Press',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );
    }
}
