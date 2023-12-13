<html>
    <head>
        <title>Nova Venda</title>
    </head>
    <body>
        <h1>Nova Venda</h1>
        <form action="{{route('nova-venda')}}" method="post">
            @csrf
            Clientes
            <select name="cliente_id" id="cliente_id">
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
            <br>
            Produtos

            <button onclick="adicionarProduto()" id='botaoAdicionar'>Adicionar Produto</button>
            <script>
                function adicionarProduto(){
                    console.log('alerta');
                    var input=`
                    <p>
                    <select name="produtos[]">
                    @foreach ($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                    </select>
                    <input name="quantidades[]" placeholder="quantidade">
                    </p>
                    `;
                    var botao=document.querySelector('#botaoAdicionar');
                    var template = document.createElement("template");
                    template.innerHTML = input;

                    botao.parentNode.insertBefore(template.content.firstElementChild, botao.nextSibling);

                }
            </script>
            <br>
            <label for="date">Data</label>
            <input type="date" name="data" id="data" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
