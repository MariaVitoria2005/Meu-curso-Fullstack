<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria Cadastrado</title>
</head>
<body>
    <h1>Nova Categoria</h1>

    <form action="{{ route('categoria.store') }}" method="POST">
        @csrf
        <label>Tipo:</label>
        <input type="text" name="tipo">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>