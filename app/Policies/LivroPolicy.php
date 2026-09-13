<?php

namespace App\Policies;

use App\Models\Livro;
use App\Models\User;

class LivroPolicy
{
    public function viewAny(User $user): bool
    {
        return true;
    }

    public function view(User $user, Livro $livro): bool
    {
        return true;
    }

    public function create(User $user): bool
{
    return in_array($user->role, ['admin', 'bibliotecario']);
}

    public function update(User $user, Livro $livro): bool
    {
        return in_array($user->role, ['admin', 'bibliotecario']);
    }

    public function delete(User $user, Livro $livro): bool
    {
        return $user->role === 'admin';
    }

    public function restore(User $user, Livro $livro): bool
    {
        return false;
    }

    public function forceDelete(User $user, Livro $livro): bool
    {
        return false;
    }
}