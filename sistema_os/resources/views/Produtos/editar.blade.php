<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="{{ route('produto.update', $produtos->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$produtos->nome}}">
        <label for="">Valor:</label>
        <input type="text" name="valor" id="valor" value="{{$produtos->valor}}">
        <label for="">Descrição:</label>
        <input name="descricao" id="descricao" value="{{$produtos->descricao}}"></input>
        <button type="submit">Atualizar</button>
    </form>
</body>
</html> 

