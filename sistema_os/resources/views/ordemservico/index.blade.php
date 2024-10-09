<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastrar ordemservicos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <button><a href="{{ route('pagina_inicial') }}">Pagina Inicial</a></button>
        <h2>Formulario de OrdemServiço:</h2>

        <form action="{{ route('ordemservico.store') }}" method="post">
            @csrf
            <label for="">Serviço: </label>
            <select name="servico_id" id="servico_id">
                @foreach ($servicos as $servico)
                    <option value="{{  $servico->id }}">{{ $servico->tipo }}</option>
                @endforeach
            </select>
            <label for="">CLliente:</label>
            <select name="cliente_id" id="cliente_id">
                @foreach ($clientes as $cliente)
                    <option value="{{  $cliente->id }}">{{ $cliente->nome }}</option>
                @endforeach
            </select>
            <label for="">Empresa: </label>
            <select name="empresa_id" id="empresa_id">
                @foreach ($empresas as $empresa)
                    <option value="{{  $empresa->id }}">{{ $empresa->razao_social }}</option>
                @endforeach
            </select>
            <label for="">Data inicial:</label>
            <input type="date" name="data_inicial" id="data_inicial">
            <label for="">Data final:</label>
            <input type="date" name="data_final" id="data_final">
            <label for="">Valor:</label>
            <input type="number" name="valor" id="valor"> 
            <label for="">Status:</label>
                <select name="status" id="status">
                    <option value="1">Concluido</option>
                    <option value="0">Em Andamento</option>
                </select>
            <button type="submit" class="btn btn-outline-dark">Salvar</button>
        </form>

        <h3>Lista de OrdemServiços:</h3>

        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">SERVIÇO</th>
                <th scope="col">CLIENTE</th>
                <th scope="col">EMPRESA</th>
                <th scope="col">DATA INICIAL</th>
                <th scope="col">DATA FINAL</th>
                <th scope="col">VALOR</th>
                <th scope="col">STATUS</th>
                <th scope="col">OPÇÕES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ordemservicos as $ordemservico)
                    <tr>
                        <th scope="row">{{ $ordemservico->id }}</th>
                        <td>{{ $ordemservico->servico ? $ordemservico->servico->tipo : 'N/A'}}</td>
                        <td>{{ $ordemservico->cliente? $ordemservico->cliente->nome : 'N/A'}}</td>
                        <td>{{ $ordemservico->empresa? $ordemservico->empresa->razao_social : 'N/A'}}</td>
                        <!-- <td>{{ $ordemservico->data_inicial }}</td> -->
                        <td>{{ $ordemservico->created_at->format('d/m/y') }}</td>
                        <!-- <td>{{ $ordemservico->data_final }}</td> -->
                        <td>{{ $ordemservico->created_at->format('d/m/y') }}</td>
                        <td>{{ $ordemservico->valor }}</td>
                        <td>
                            @if($ordemservico->status)
                                Concluido
                            @else
                                Em Andamento
                            @endif
                        </td>
                        <td>
                            <div class="btns_formulario">
                                <a href="{{ route('ordemservico.edit', $ordemservico->id) }}" class="btn btn-outline-primary">
                                <img src="https://img.icons8.com/?size=100&id=21076&format=png&color=000000" width="35" height="35">Editar Ordem serviço</img>
                                </a>
                                <form action="{{ route('ordemservico.destroy', $ordemservico->id) }}" method="POST" style="display:inline; "onclick="return confirm('Deseja realmete excluir?')" >
                                    @csrf
                                    @method('DELETE')
                                    <img src="https://img.icons8.com/?size=100&id=11997&format=png&color=000000" width="35" height="35"></img>
                                    <button type="submit" class="btn btn-outline-danger">Excluir ordemservico</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>