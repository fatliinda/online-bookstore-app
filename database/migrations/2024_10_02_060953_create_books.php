<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->string('title')->nullable(false);
                $table->text('description')->nullable(false);
                $table->decimal('price', 8, 2)->nullable(false);
                $table->string('image_path')->nullable(); 
                $table->unsignedBigInteger('author_id')->nullable(); 
                $table->foreign('author_id')->references('id')->on('authors')->onDelete('cascade');
                $table->timestamps();
            });
           
        }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }

};