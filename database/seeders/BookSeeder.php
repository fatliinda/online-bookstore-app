<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Punk 57',
            'author' => 'Penelope Douglas',
            'price' =>'9.99',
            'description' => 'A new adult romance that explores the complex emotions between two pen pals who were never supposed to meet in person but accidentally do.',
            'image_path' => 'images/book1.jpg',  // Placeholder image
        ]);
        
        Book::create([
            'title' => 'A Little Life',
            'author' => 'Hanya Yanagihara',
            'price' =>'9.99',
            'description' => 'A deeply emotional novel about four college friends and the traumatic experiences that shape their lives, exploring themes of friendship, pain, and recovery.',
            'image_path' => 'images/book2.jpg',
        ]);
        
        Book::create([
            'title' => 'Inteligjenca Artificiale',
            'author' => 'Mat Burgess',
            'price' =>'9.99',
            'description' => 'An in-depth look at artificial intelligence, its development, capabilities, and the potential impacts it may have on society and the future.',
            'image_path' => 'images/book3.jpg',
        ]);
        
        Book::create([
            'title' => 'Investitori Inteligjent',
            'author' => 'Benjamin Graham',
            'price' =>'9.99',
            'description' => 'A foundational book on value investing, providing strategies for long-term wealth building through intelligent financial decisions.',
            'image_path' => 'images/book4.png',
        ]);
        
        Book::create([
            'title' => 'Atomic Habits',
            'author' => 'James Clear',
            'price' =>'9.99',
            'description' => 'A practical guide to breaking bad habits and building good ones through small, incremental changes that lead to significant personal growth.',
            'image_path' => 'images/book7.jpg',
        ]);
    }
}
