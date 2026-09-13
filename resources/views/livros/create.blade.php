<x-app-layout>
    <x-slot name="header">
        <h2>Cadastrar Livro</h2>
    </x-slot>

    <div class="py-6 max-w-lg mx-auto">
        <form action="{{ route('livros.store') }}" method="POST">
            @csrf

            <label>Título</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}">
            @error('titulo') <div class="text-red-600">{{ $message }}</div> @enderror

            <label>ISBN</label>
            <input type="text" name="isbn" value="{{ old('isbn') }}">
            @error('isbn') <div class="text-red-600">{{ $message }}</div> @enderror

            <label>Quantidade</label>
            <input type="number" name="quantidade" value="{{ old('quantidade') }}">

            <label>Autor</label>
            <select name="autor_id">
                @foreach ($autores as $autor)
                    <option value="{{ $autor->id }}">{{ $autor->nome }}</option>
                @endforeach
            </select>

            <button type="submit">Salvar</button>
        </form>
    </div>
</x-app-layout>