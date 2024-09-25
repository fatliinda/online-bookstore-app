<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name' => 'Penelope Douglas']);
        Author::create(['name' => 'Hanya Yanagihara']);
        Author::create(['name' => 'Mat Burgess']);
        Author::create(['name' => 'Benjamin Graham']);
        Author::create(['name' => 'James Clear']);
    }
}
