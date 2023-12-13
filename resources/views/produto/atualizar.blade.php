<html>
    <body>
        <form action="{{ route('produto.atualizar', $produto->id) }}" method="post">
        @csrf
        @method('PUT')

            <label>Nome:</label><br>
            <input type="text" name="nome" value="{{ $produto->nome }}"><br>
            <label>Descrição:</label><br>
            <input type="text" name="descricao" value="{{ $produto->descricao }}"><br>
            <label>Quantidade:</label><br>
            <input type="text" name="preco" value="{{ $produto->preco }}"><br>

            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>
