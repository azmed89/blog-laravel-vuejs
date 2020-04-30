<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(
            [
                'title' => 'Développeur Fullstack',
                'description' => 'Développeur Fullstack description',
            ]
        );

        App\Category::create(
            [
                'title' => 'Commercial technique',
                'description' => 'Commercial technique description',
            ]
        );

        App\Category::create(
            [
                'title' => 'Développeur JavaEE',
                'description' => 'Développeur JavaEE description',
            ]
        );
    }
}
