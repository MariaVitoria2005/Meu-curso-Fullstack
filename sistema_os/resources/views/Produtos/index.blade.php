<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de Produto:</h2>

        <form action="{{ route('produto.salvar') }}" method="post">
            @csrf
            <label for="">Nome: </label>
            <input type="text" name="nome" id="nome">
            <label for="">Valor:</label>
            <input type="text" name="valor" id="valor">
            <label for="">Descrição:</label>
            <input type="text" name="descricao" id="descricao">
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        <h3>Lista de produtos:</h3>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">NOME</th>
                <th scope="col">VALOR</th>
                <th scope="col">DESCRIÇÃO</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produtos as $produto)
                    <tr>
                        <th scope="row">{{ $produto->id }}</th>
                        <td>{{ $produto->nome }}</td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('produto.edit', $produto->id) }}" class="btn btn-outline-primary">
                                    <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar Produto</img>
                                </a>
                                <form action="{{ route('produto.destroy', $produto->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger" >Excluir Produto</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>