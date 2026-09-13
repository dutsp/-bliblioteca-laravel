<?php

namespace Database\Seeders;

use App\Models\Livro;
use Illuminate\Database\Seeder;

class LivroSeeder extends Seeder
{
    public function run(): void
    {
        Livro::create(['titulo' => 'Dom Casmurro','isbn' => '978-1-000001','quantidade' => 3,'autor_id' => 1, ]);
        Livro::create([ 'titulo' => 'Harry Potter e a Pedra Filosofal', 'isbn' => '978-1-000002', 'quantidade' => 5, 'autor_id' => 2,]);
        Livro::create([ 'titulo' => '1984', 'isbn' => '978-1-000003', 'quantidade' => 4, 'autor_id' => 3,]);
    }
}
