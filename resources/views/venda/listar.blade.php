<table border="1">

    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Valor Total</th>
            <th>Cliente</th>
            <th>Descricao</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>
    </thead>

    <tbody>
        <p><a href="{{ route('venda.criar') }}">Cadastrar Venda</a></p>
        @forelse($vendas as $venda)
            <tr>
                <td> {{ $venda->id }} </td>
                <td> {{ $venda->data }} </td>
                <td> {{ $venda->valor_total }} </td>
                <td> {{ $venda->cliente->nome }} </td>
                <td>
                @foreach ($venda->pedidos as $pedido)
                    {{ $pedido->quantidade }}
                    {{ $pedido->produto->nome }}
                @endforeach
                </td>


                <td> <a href="{{ route('venda.editar', $venda->id) }}">Editar Venda</a> </td>
                <td>
                    <form action="{{route('venda.deletar', $venda->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onClick="return confirm('Tem certeza que quer deletar?');">
                            Deletar
                        </button>
                    </form>
                </td>
            </tr>
        @empty
            <p>Nenhuma venda cadastrada</p>
        @endforelse
    </tbody>

</table>

