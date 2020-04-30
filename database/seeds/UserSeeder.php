<?php

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
        App\User::create(
            [
                'name' => 'Dupont',
                'email' => 'dupont@gmail.com',
                'password' => bcrypt('pass'),
            ]
        );

        App\User::create(
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('user'),
            ]
        );
    }
}
