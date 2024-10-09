<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar empresa</title>
</head>
<body>
    <h1>Editar empresa</h1>

    <form action="{{ route('empresa.update', $empresas->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Razão Social:</label>
        <input type="text" name="razao_social" id="razao_social" value="{{$empresas->razao_social}}">
        <label for="">cnpj:</label>
        <input type="string" name="cnpj" id="cnpj" value="{{$empresas->cnpj}}">
        <label for="">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{$empresas->endereco}}">
        <label for="">Telefone:</label>
        <input type="string" name="telefone" id="telefone" value="{{$empresas->telefone}}">
        <label for="">Cep:</label>
        <input type="string" name="cep" id="cep" value="{{$empresas->cep}}"></input>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html> 