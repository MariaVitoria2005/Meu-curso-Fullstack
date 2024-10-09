<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar Produto</title>
</head>
<body>
    @foreach($produtos as produto)
        <h1>{{$produto->nome}}</h1>
        <p>valor: {{$produto->valor}}</p>
        <p>{{$produto->descricao}}</p>
    @endforeach
    <a href="{{ route('produto.edit', $produto->id) }}">Editar</a>
</body>
</html> 