<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Models\Autor;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLivroRequest;
use App\Http\Requests\UpdateLivroRequest;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::with('autor')->get();
        return view('livros.index', compact('livros'));
    }

    public function create()
{

    $this->authorize('create', Livro::class);

    $autores = Autor::all();
    return view('livros.create', compact('autores'));
}

    public function store(StoreLivroRequest $request)
    {
        $this->authorize('create', Livro::class);

        $validated = $request->validated();

        Livro::create($validated);

        return redirect()->route('livros.index')->with('sucesso', 'Livro cadastrado!');
    }

    public function show(string $id)
    {
    }

    public function edit(Livro $livro)
    {
        $this->authorize('update', $livro);

        $autores = Autor::all();
        return view('livros.edit', compact('livro', 'autores'));
    }

    public function update(UpdateLivroRequest $request, Livro $livro)
    {
        $this->authorize('update', $livro);

        $validated = $request->validated();
        $livro->update($validated);

        return redirect()->route('livros.index')->with('sucesso', 'Livro atualizado!');
    }

    public function destroy(Livro $livro)
    {
        $this->authorize('delete', $livro);

        $livro->delete();
        return redirect()->route('livros.index')->with('sucesso', 'Livro excluído!');
    }
}