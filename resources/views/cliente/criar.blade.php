<html>
    <head>
        <title>Novo Cliente</title>
    </head>
    <body>
        <h1>Novo Cliente</h1>
        <form action="{{route('novo-cliente')}}" method="post">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>
            <br>
            <label for="text">Telefone</label>
            <input type="text" name="telefone" id="telefone" required>
            <br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>
