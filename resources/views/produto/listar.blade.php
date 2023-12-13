<table border="1">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <p><a href="{{ route('produto.criar') }}">Cadastrar Produto</a></p>
        @forelse($produtos as $produto)
            <tr>
                <td> {{ $produto->id }} </td>
                <td> {{ $produto->nome }} </td>
                <td> {{ $produto->descricao }} </td>
                <td> {{ $produto->preco }} </td>

                <td> <a href="{{ route('produto.editar', $produto->id) }}">Editar Produto</a> </td>
                <td>
                    <form action="{{route('produto.deletar', $produto->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="return confirm('Tem certeza que quer deletar?');">
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <p>Nenhum produto cadastrado</p>
        @endforelse
    </tbody>

</table>

