<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('categoria.update', $categorias->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Tipo: </label>
        <input type="text" name="tipo" id="tipo" value="{{ $categorias->tipo }}">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>