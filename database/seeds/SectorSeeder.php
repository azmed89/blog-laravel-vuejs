<?php

use Illuminate\Database\Seeder;

class SectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sector::create(
            [
                'title' => 'Informatique',
                'description' => 'Informatique description',
            ]
        );

        App\Sector::create(
            [
                'title' => 'Commerce',
                'description' => 'Commerce description',
            ]
        );

        App\Sector::create(
            [
                'title' => 'Enseignement',
                'description' => 'Enseignement description',
            ]
        );
    }
}
