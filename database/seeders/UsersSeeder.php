<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'manik',
            'email' => 'manik@gmail.com',
            'password' => bcrypt('manik2001'),
            'remember_token' => csrf_token(),
        ]);
    }
}