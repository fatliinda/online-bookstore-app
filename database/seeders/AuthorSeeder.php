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
        Author::create(['name' => 'Penelope Douglas','image_path'=>'images/pd.jpg']);
        Author::create(['name' => 'Hanya Yanagihara','image_path'=>'images/hw.jpg']);
        Author::create(['name' => 'Mat Burgess','image_path'=>'images/mb.jpg']);
        Author::create(['name' => 'Benjamin Graham','image_path'=>'images/bg.jpg']);
        Author::create(['name' => 'James Clear','image_path'=>'images/jc.jpg']);
    }
}
