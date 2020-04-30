<?php

use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\CategoryPost::create(
            [
                'post_id' => 1,
                'category_id' => 1,
            ]
        );

        App\CategoryPost::create(
            [
                'post_id' => 1,
                'category_id' => 2,
            ]
        );

        App\CategoryPost::create(
            [
                'post_id' => 2,
                'category_id' => 1,
            ]
        );

        App\CategoryPost::create(
            [
                'post_id' => 3,
                'category_id' => 2,
            ]
        );

        App\CategoryPost::create(
            [
                'post_id' => 4,
                'category_id' => 3,
            ]
        );
    }
}
