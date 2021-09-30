<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Muhammad Reza Aditya',
            'email' => 'mhmmdreeza13@gmail.com',
            'password' => bcrypt('rejakartans')
        ]);

        User::create([
            'name' => 'Rendi Fadillah',
            'email' => 'rendifadillah@gmail.com',
            'password' => bcrypt('rendi')
        ]);

        User::create([
            'name' => 'Muhammad Taufan',
            'email' => 'opancoganjp1@gmail.com',
            'password' => bcrypt('opanipin')
        ]);
    }
}
