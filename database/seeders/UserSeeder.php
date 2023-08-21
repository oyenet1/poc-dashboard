<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

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
            'last_name' => 'Oyerinde',
            'first_name' => 'Bowofade',
            'email' => 'admin@poc.com',
            'username' => 'admin',
            'password' => bcrypt('password')
        ]);
    }
}