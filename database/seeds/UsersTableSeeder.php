<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'admin',
            'email' => 'root',
            'password' => bcrypt('root'),
            'tipe' => 'super',
            'photo' => 'profile1.png',
            'remember_token' => str_random(10),
        ]);
    }
}
