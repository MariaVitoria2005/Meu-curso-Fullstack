<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar empresa</title>
</head>
<body>
    @foreach($empresas as empresa)
        <h1>{{$empresa->razao_social}}</h1>
        <p>{{$empresa->cnpj}}</p>
        <p>{{$empresa->endereco]}}</p>
        <p>{{$empresa->telefone]}}</p>
        <p>{{$empresa->cep]}}</p>
    @endforeach
    <a href="{{ route('empresa.edit', $empresa->id) }}">Editar</a>
</body>
</html> 