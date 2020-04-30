<?php

use Illuminate\Database\Seeder;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Offer::create(
            [
                'title' => 'Développeur Fullstack',
                'text' => 'Développeur Fullstack description',
                'sector_id' => 1,
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Offer::create(
            [
                'title' => 'Commercial technique',
                'text' => 'Commercial technique description',
                'sector_id' => 2,
                'created_by' => 2
            ]
        );

        App\Offer::create(
            [
                'title' => 'Développeur JavaEE',
                'text' => 'Développeur JavaEE description',
                'sector_id' => 1,
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Offer::create(
            [
                'title' => 'Professeur d\'anglais',
                'text' => 'Développeur JavaEE description',
                'sector_id' => 3,
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );

        App\Offer::create(
            [
                'title' => 'Développeur Fullstack',
                'text' => 'Développeur Fullstack description',
                'sector_id' => 1,
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Offer::create(
            [
                'title' => 'Commercial technique',
                'text' => 'Commercial technique description',
                'sector_id' => 2,
                'created_by' => 2
            ]
        );

        App\Offer::create(
            [
                'title' => 'Développeur JavaEE',
                'text' => 'Développeur JavaEE description',
                'sector_id' => 1,
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Offer::create(
            [
                'title' => 'Professeur d\'anglais',
                'text' => 'Développeur JavaEE description',
                'sector_id' => 3,
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );
    }
}
