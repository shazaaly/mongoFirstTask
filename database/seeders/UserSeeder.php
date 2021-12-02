<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'auther_1',
            'email' => 'auther1@gmail.com',
            'password' => bcrypt('12345678'),

        ]);
        User::create([
            'name' => 'auther_1',
            'email' => 'auther_1@gmail.com',
            'password' => bcrypt('12345678'),

        ]);
        User::create([
            'name' => 'auther_2',
            'email' => 'auther2@gmail.com',
            'password' => bcrypt('12345678'),

        ]);
        User::create([
            'name' => 'auther_3',
            'email' => 'auther3@gmail.com',
            'password' => bcrypt('12345678'),

        ]);
//        User::factory()->count(10)->create();

    }
}
