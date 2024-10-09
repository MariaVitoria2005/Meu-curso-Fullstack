<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar empresas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de Empresa:</h2>

        <form action="{{ route('empresa.salvar') }}" method="post">
            @csrf
            <label for="">Razao Social: </label>
            <input type="text" name="razao_social" id="razao_social">
            <label for="">cnpj:</label>
            <input type="string" name="cnpj" id="cnpj">
            <label for="">Endereço:</label>
            <input type="string" name="endereco" id="endereco">
            <label for="">Telefone:</label>
            <input type="text" name="telefone" id="telefone">
            <label for="">Cep:</label>
            <input type="string" name="cep" id="cep">
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        <h3>Lista de Empresas:</h3>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">RAZÃO SOCIAL</th>
                <th scope="col">CNPJ</th>
                <th scope="col">ENDEREÇO</th>
                <th scope="col">TELEFONE</th>
                <th scope="col">CEP</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                    <tr>
                        <th scope="row">{{ $empresa->id }}</th>
                        <td>{{ $empresa->razao_social }}</td>
                        <td>{{ $empresa->cnpj }}</td>
                        <td>{{ $empresa->endereco }}</td>
                        <td>{{ $empresa->telefone }}</td>
                        <td>{{ $empresa->cep }}</td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('empresa.edit', $empresa->id) }}" class="btn btn-outline-primary">
                                <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar Empresa</img>
                                </a>
                                <form action="{{ route('empresa.destroy', $empresa->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger">Excluir empresa</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>