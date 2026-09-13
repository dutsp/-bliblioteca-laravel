<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create(['name' => 'Admin','email' => 'admin@email.com','password' => bcrypt('12345678'),'role' => 'admin',]);
        User::create(['name' => 'Bibliotecario','email' => 'bibliotecario@email.com','password' => bcrypt('12345678'),'role' => 'bibliotecario',]);
        User::create(['name' => 'Leitor','email' => 'leitor@email.com','password' => bcrypt('12345678'),'role' => 'leitor',]);
    }
}