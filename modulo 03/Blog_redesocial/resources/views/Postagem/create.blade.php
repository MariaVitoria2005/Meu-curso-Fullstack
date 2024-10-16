<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem Cadastrado</title>
</head>
<body>
    <h1>Nova Postagem</h1>

    <form action="{{ route('postagem.store') }}" method="POST">
        @csrf
        <label>Titulo:</label>
        <input type="text" name="titulo">
        <label>Conteudo:</label>
        <input type="text" name="conteudo">
        <label>Data_postagem:</label>
        <input type="date" name="data-postagem">
        <label>Foto:</label>
        <input type="file" name="foto">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>