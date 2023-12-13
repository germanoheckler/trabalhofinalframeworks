<html>
    <body>
        <form action="{{ route('cliente.atualizar', $cliente->id) }}" method="post">
        @csrf
        @method('PUT')

            <label>Nome:</label><br>
            <input type="text" name="nome" value="{{ $cliente->nome }}"><br>
            <label>Telefone:</label><br>
            <input type="text" name="telefone" value="{{ $cliente->telefone }}"><br>

            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>
