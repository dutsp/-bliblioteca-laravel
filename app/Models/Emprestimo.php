<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Emprestimo extends Model
{
    protected $fillable = ['livro_id', 'user_id', 'data_emprestimo', 'data_devolucao', 'status'];
    public function livro() { return $this->belongsTo(Livro::class); }
    public function user() { return $this->belongsTo(User::class); }
}
