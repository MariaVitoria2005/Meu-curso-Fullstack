<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar servico</title>
</head>
<body>
    <h1>Editar servico</h1>

    <form action="{{ route('servico.update', $servico->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Tipo:</label>
        <input type="text" name="tipo" id="tipo" value="{{$servico->tipo}}">
        <label for="">Valor:</label>
        <input type="text" name="valor" id="valor" value="{{$servico->valor}}">
        <label for="">Empresa_id:</label>
        <input type="text" name="empresa_id" id="empresa_id" value="{{$servico->empresa_id}}"></input>
        <label for="">Categoria_id:</label>
        <input type="text" name="categoria_id" id="categoria_id" value="{{$servico->categoria_id}}"></input>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html> 