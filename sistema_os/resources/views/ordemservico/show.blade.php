<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar ordemservico</title>
</head>
<body>
    @foreach($ordemservicos as ordemservico)
        <h1>{{$ordemservico->servico->tipo}}</h1>
        <p>{{$ordemservico->cliente->nome}}</p>
        <p>{{$ordemservico->empresa->razao_social]}}</p>
        <p>{{$ordemservico->data_inicial}}</p>
        <p>{{$ordemservico->data_final}}</p>
        <p>{{$ordemservico->valor}}</p>
        <p>{{$ordemservico->status}}</p>
    @endforeach
    <a href="{{ route('ordemservico.edit', $ordemservcio->id) }}">Editar</a>
</body>
</html> 