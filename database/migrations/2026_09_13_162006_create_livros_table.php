<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('isbn')->unique();
            $table->integer('quantidade')->default(1);
            $table->foreignId('autor_id')->constrained('autors')->onDelete('cascade');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
