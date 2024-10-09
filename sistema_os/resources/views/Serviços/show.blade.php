<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar servico</title>
</head>
<body>
    @foreach($servicos as servico)
        <h1>{{$servico->tipo}}</h1>
        <p>{{$servico->valor}}</p>
        <p>{{$servico->empresa_id]}}</p>
        <p>{{$servico->categoria_id]}}</p>
    @endforeach
    <a href="{{ route('servico.edit', $servico->id) }}">Editar</a>
</body>
</html> 