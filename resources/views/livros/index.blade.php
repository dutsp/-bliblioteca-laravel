<x-app-layout>
    <x-slot name="header">
        <h2>Livros</h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        @if (session('sucesso'))
            <div class="mb-4 text-green-600">{{ session('sucesso') }}</div>
        @endif

        <a href="{{ route('livros.create') }}">Cadastrar novo livro</a>

        <table class="w-full mt-4 border">
            <tr>
                <th>Título</th><th>Autor</th><th>Qtd</th><th>Ações</th>
            </tr>
            @foreach ($livros as $livro)
            <tr>
                <td>{{ $livro->titulo }}</td>
                <td>{{ $livro->autor->nome }}</td>
                <td>{{ $livro->quantidade }}</td>
                <td>
                    <a href="{{ route('livros.edit', $livro) }}">Editar</a>
                    <form action="{{ route('livros.destroy', $livro) }}" method="POST" style="display:inline">
                        @csrf @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>