<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('emprestimos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('livro_id')->constrained('livros')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->date('data_emprestimo');
            $table->date('data_devolucao')->nullable();
            $table->string('status')->default('em_andamento');
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('emprestimos');
    }
};
