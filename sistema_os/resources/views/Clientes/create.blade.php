<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cliente Cadastrado</title>
</head>
<body>
    <h1>Novo cliente</h1>

    <form action="{{ route('cliente.salvar') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <label>Data de Nascimento:</label>
        <input type="date" name="data_nascimento">
        <label>Foto:</label>
        <label type="file" name="foto"></label>
        <label>Status:</label>
        <input type="boolean" name="status">
        <button type="submit">Salvar</button>
    </form>
</body>
</html>