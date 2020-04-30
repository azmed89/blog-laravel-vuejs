<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Post::create(
            [
                'title' => 'Post 1',
                'image' => '1.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 2',
                'image' => '2.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 3',
                'image' => '3.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 4',
                'image' => '4.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 5',
                'image' => '1.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 6',
                'image' => '2.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 7',
                'image' => '3.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 2,
                'created_by' => 1
            ]
        );

        App\Post::create(
            [
                'title' => 'Post 8',
                'image' => '4.jpg',
                'text' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte',
                'is_published' => 1,
                'published_by' => 1,
                'created_by' => 1
            ]
        );
    }
}
