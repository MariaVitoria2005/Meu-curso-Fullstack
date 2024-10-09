<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto Cadastrado</title>
</head>
<body>
    <h1>Novo Produto</h1>

    <form action="{{ route('produto.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome">
        <label>Valor:</label>
        <input type="text" name="valor">
        <label>Descrição:</label>
        <textarea type="text" name="descricao"></textarea>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>