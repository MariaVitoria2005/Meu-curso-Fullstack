<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>servico Cadastrado</title>
</head>
<body>
    <h1>Nova servico</h1>

    <form action="{{ route('servico.store') }}" method="POST">
        @csrf
        <label>Tipo:</label>
        <input type="text" name="tipo">
        <label>valor:</label>
        <input type="string" name="valor">
        <label>Empresa_id:</label>
        <label type="string" name="empresa_id"></label>
        <label>Categoria_id:</label>
        <label type="string" name="categoria_id"></label>
        <label>status:</label>
        <label type="string" name="status"></label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>