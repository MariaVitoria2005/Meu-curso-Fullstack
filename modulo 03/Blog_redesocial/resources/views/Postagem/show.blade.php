<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar postagem</title>
</head>
<body>
    @foreach($postagems as postagem)
        <h1>{{$postagem->titulo}}</h1>
        <p>{{$postagem->conteudo}}</p>
        <p>{{$postagem->data_postagem]}}</p>
        <p>{{$postagem->foto]}}</p>
    @endforeach
    <a href="{{ route('postagem.edit', $postagem->id) }}">Editar</a>
</body>
</html> 