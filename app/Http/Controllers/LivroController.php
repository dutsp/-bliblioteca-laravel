<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();
        return view('livros.index', compact('livros'));
    }

    public function create()
    {
        $autores = Autor::all();
        return view('livros.create', compact('autores'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate(['titulo' => 'required|min:3','isbn' => 'required|unique:livros','quantidade' => 'required|integer|min:0','autor_id' => 'required|exists:autors,id',]);

        Livro::create($validated);

        return redirect()->route('livros.index')->with('sucesso', 'Livro cadastrado!');
    }

    public function show(string $id)
    {
    }

    public function edit(Livro $livro)
    {
        $autores = Autor::all();
        return view('livros.edit', compact('livro', 'autores'));
    }

    public function update(Request $request, Livro $livro)
    {
        $validated = $request->validate([
            'titulo' => 'required|min:3',
            'isbn' => 'required|unique:livros,isbn,' . $livro->id,
            'quantidade' => 'required|integer|min:0',
            'autor_id' => 'required|exists:autors,id',
        ]);

        $livro->update($validated);

        return redirect()->route('livros.index')->with('sucesso', 'Livro atualizado!');
    }

    public function destroy(Livro $livro)
    {
        $livro->delete();
        return redirect()->route('livros.index')->with('sucesso', 'Livro excluído!');
    }
}