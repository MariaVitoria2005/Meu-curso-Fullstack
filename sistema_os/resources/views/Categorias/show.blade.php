<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar categoria</title>
</head>
<body>
    @foreach($categorias as categoria)
        <h1>{{$categoria->tipo}}</h1>
    @endforeach
    <a href="{{ route('categoria.edit', $categoria->id) }}">Editar</a>
</body>
</html> 