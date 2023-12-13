<table border="1">

    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <p><a href="{{ route('cliente.criar') }}">Cadastrar Cliente</a></p>
        @forelse($clientes as $cliente)
            <tr>
                <td> {{ $cliente->id }} </td>
                <td> {{ $cliente->nome }} </td>
                <td> {{ $cliente->telefone }} </td>

                <td> <a href="{{ route('cliente.editar', $cliente->id) }}">Editar Cliente</a> </td>
                <td>
                    <form action="{{route('cliente.deletar', $cliente->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="return confirm('Tem certeza que quer deletar?');">
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <p>Nenhum cliente cadastrado</p>
        @endforelse
    </tbody>

</table>

