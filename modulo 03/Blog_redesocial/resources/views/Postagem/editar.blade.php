<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar Postagem</title>
</head>
<body>
    <h1>Editar Postagem</h1>

    <form action="{{ route('postagem.update', $postagem->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Titulo:</label>
        <input type="text" name="titulo" id="titulo" value="{{$postagem->titulo}}">
        <label for="">Conteudo:</label>
        <input type="string" name="conteudo" id="conteudo" value="{{$postagem->conteudo}}">
        <label for="">Data_Postagem:</label>
        <input type="date" name="data_postagem" id="data_postagem" value="{{$postagem->data_postagem}}">
        <label for="">foto:</label>
        <input type="file" name="foto" id="foto" value="{{$postagem->foto}}">
        <button type="submit">Atualizar</button>
    </form>
</body>
</html> 