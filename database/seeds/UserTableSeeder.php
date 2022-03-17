<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $table = 'testm';

    public function run()
    {
        User::create([
                'id' => 1,
                'name' => 'Joao',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        User::create([
                'id' => 2,
                'name' => 'Jose',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );

        User::create([
                'id' => 3,
                'name' => 'Paulo',
                'created_at' => date_create()->format('Y-m-d H:i:s'),
                'updated_at' => date_create()->format('Y-m-d H:i:s'),
            ]
        );
    }
}
