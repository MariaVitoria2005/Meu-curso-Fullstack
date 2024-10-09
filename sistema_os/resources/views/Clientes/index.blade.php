<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar clientes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de Cliente:</h2>

        @if (session('erros'))
            <div>{{ session('erros') }}</div>
        @endif

        <form action="{{ route('cliente.salvar') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <label for="">Nome: </label>
            <input type="text" name="nome" id="nome">
            <label for="">Data de Nascimento:</label>
            <input type="date" name="data_nascimento" id="data_nascimento">
            <label for="">Foto:</label>
            <input type="file" name="foto" id="foto" >
            <label for="status">Status:</label>
            <select name="status" id="status">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <h3>Lista de Clientes:</h3>
        
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOME</th>
                    <th scope="col">DATA DE NASCIMENTO</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nome }}</td>
                        <!-- <td>{{ $cliente->data_nascimento }}</td> -->
                        <td>{{ $cliente->created_at->format('d/m/y') }}</td>
                        <!-- <td>{{ $cliente->foto }}</td> -->
                        <td>
                            @if ($cliente->foto)
                                <img src="{{ asset('storage/'.$cliente->foto) }}" alt="Foto do cliente" width="80">
                            @else
                                Sem Foto
                            @endif
                        </td>
                        <!-- <td>{{ $cliente->status }}</td> -->
                        <td>
                            @if ($cliente->status)
                                Ativo
                            @else
                                Inativo
                            @endif
                        </td>

                        <td>
                            <!-- <button><a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a></button> -->
                            <div class="btns_formulario">

                                <a href="{{ route('cliente.edit', $cliente->id) }}" class="btn btn-outline-primary">
                                    <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar Cliente</img>
                                </a>

                                <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')">
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger">Excluir cliente</button>
                                </form>

                                <form action="{{ route('cliente.atualizarStatus', $cliente->id) }}" method="POST" style="display:inline;">
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