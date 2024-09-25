<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $author1 = Author::where('name', 'Penelope Douglas')->first();
        $author2 = Author::where('name', 'Hanya Yanagihara')->first();
        $author3 = Author::where('name', 'Mat Burgess')->first();
        $author4 = Author::where('name', 'Benjamin Graham')->first();
        $author5 = Author::where('name', 'James Clear')->first();

       
        Book::create([
            'title' => 'Punk 57',
            'description' => 'The history of love.',
            'author_id' => $author1->id,
            'price'=>'9.99',
            'image_path' => 'images/book1.jpg',
        ]);

        Book::create([
            'title' => 'A Little Life',
            'description' => 'A fantasy novel and prelude.',
            'author_id' => $author2->id,
            'price'=>'9.99',
            'image_path' => 'images/book2.jpg',
        ]);

        Book::create([
            'title' => 'Inteligjenca Artificiale',
            'description' => 'A dystopian social science fiction novel.',
            'author_id' => $author3->id,
            'price'=>'9.99',
            'image_path' => 'images/book3.jpg',
        ]);

        Book::create([
            'title' => 'Investitori Inteligjent',
            'description' => 'A novel about racial injustice in the Deep South.',
            'author_id' => $author4->id,
            'price'=>'9.99',
            'image_path' => 'images/book4.png',
        ]);

        Book::create([
            'title' => 'Atomic Habits',
            'description' => 'A romantic novel about manners and marriage.',
            'author_id' => $author5->id,
            'price'=>'9.99',
            'image_path' => 'images/book7.jpg',
        ]);
    }
}
