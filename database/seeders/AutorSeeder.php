<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    
    public function run(): void
    {
        Autor::create(['nome' => 'Machado de Assis', 'nacionalidade' => 'Brasileiro']);
        Autor::create(['nome' => 'J.K. Rowling', 'nacionalidade' => 'Britânica']);
        Autor::create(['nome' => 'George Orwell','nacionalidade' => 'Britânico',]);
    }
}
