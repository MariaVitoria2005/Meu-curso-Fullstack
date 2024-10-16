<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar Postagem</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de Postagem:</h2>

        @if (session('erros'))
            <div>{{ session('erros') }}</div>
        @endif

        <form action="{{ route('postagem.salvar') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <label for="">Titulo: </label>
            <input type="text" name="titulo" id="titulo">
            <label for="">Conteudo:</label>
            <input type="date" name="conteudo" id="conteudo">
            <label for="">Data_Postagem:</label>
            <input type="date" name="data_postagem" id="data_postagem" >
            <label for="">foto:</label>
            <input type="file" name="foto" id="foto" >
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <h3>Lista de postagems:</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITULO</th>
                    <th scope="col">CONTEUDO</th>
                    <th scope="col">DATA POSTAGEM</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($postagems as $postagem)
                    <tr>
                        <th scope="row">{{ $postagem->id }}</th>
                        <td>{{ $postagem->titulo }}</td>
                        <!-- <td>{{ $postagem->data_nascimento }}</td> -->
                        <td>{{ $postagem->created_at->format('d/m/y') }}</td>
                        <!-- <td>{{ $postagem->foto }}</td> -->
                        <td>
                            @if ($postagem->foto)
                                <img src="{{ asset('storage/'.$postagem->foto) }}" alt="Foto do postagem" width="80">
                            @else
                                Sem Foto
                            @endif
                        </td>
                        <!-- <td>{{ $postagem->status }}</td> -->

                        <td>
                            <!-- <button><a href="{{ route('postagem.edit', $postagem->id) }}">Editar</a></button> -->
                            <div class="btns_formulario">

                                <a href="{{ route('postagem.edit', $postagem->id) }}" class="btn btn-outline-primary">
                                    <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar postagem</img>
                                </a>

                                <form action="{{ route('postagem.destroy', $postagem->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger">Excluir postagem</button>
                                </form>

                                <form action="{{ route('postagem.atualizarStatus', $postagem->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('POST')
                                    <button type="submit">Ativar</button>
                                </form> 
                            </div>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>