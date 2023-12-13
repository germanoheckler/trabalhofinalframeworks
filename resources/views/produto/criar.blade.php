<html>
    <head>
        <title>Novo Produto</title>
    </head>
    <body>
        <h1>Novo Produto</h1>
        <form action="{{route('novo-produto')}}" method="post">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <br>
            <label for="text">Descrição</label>
            <input type="text" name="descricao" id="descricao" required>
            <br>
            <label for="text">Preço</label>
            <input type="text" name="preco" id="preco" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
