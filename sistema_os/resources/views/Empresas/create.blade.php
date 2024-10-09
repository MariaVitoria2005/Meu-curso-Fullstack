<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa Cadastrado</title>
</head>
<body>
    <h1>Nova empresa</h1>

    <form action="{{ route('empresa.store') }}" method="POST">
        @csrf
        <label>Razão social:</label>
        <input type="text" name="razao_social">
        <label>cnpj:</label>
        <input type="string" name="cnpj">
        <label>Endereço:</label>
        <label type="text" name="endereco"></label>
        <label>Telefone:</label>
        <label type="string" name="telefone"></label>
        <label>Cep:</label>
        <label type="string" name="cep"></label>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>