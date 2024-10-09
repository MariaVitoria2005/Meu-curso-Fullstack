<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar categorias</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de Categoria:</h2>

        <form action="{{ route('categoria.salvar') }}" method="post">
            @csrf
            <label for="">Tipo: </label>
            <input type="text" name="tipo" id="tipo">
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        <h3>Lista de Categorias:</h3>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">TIPO</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <th scope="row">{{ $categoria->id }}</th>
                        <td>{{ $categoria->tipo }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-outline-primary">
                                <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar Categoria</img>
                                </a>
                                <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger">Excluir Categoria</button>
                                </form>
                                
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>