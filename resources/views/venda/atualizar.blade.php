<html>
    <body>
        <form action="{{ route('venda.atualizar', $venda->id) }}" method="post">
        @csrf
        @method('PUT')

            <label>Data</label><br>
            <input type="date" name="data" value="{{ $venda->data }}"><br>
            <label>Valor Total:</label><br>
            <input type="number" name="valor_total" value="{{ $venda->valor_total }}"><br>

            <input type="submit" value="Atualizar">
        </form>
    </body>
</html>
