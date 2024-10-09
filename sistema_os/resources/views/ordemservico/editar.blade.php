<!DOCTYPE html>
<html lang="en">
<head>   
    <title>Editar ordemservicos</title>
</head>
<body>
    <h1>Editar ordemservico</h1>

    <form action="{{ route('ordemservico.update', $ordemservicos->id) }}" method="post">
        @csrf
        @method('PUT')

        <label for="servico_id">SERVIÇO:</label>
        <select name="servico_id" id="servico_id">
            @foreach ($servicos as $servico)
                <option value="{{ $servico->id}}" {{ $ordemservicos->servico_id == $servico->id ? 'selected': '' }}>
                    {{ $servico->tipo }}
                </option>
            @endforeach
        </select>

        <label for="cliente_id">CLIENTE:</label>
        <select name="cliente_id" id="cliente_id">
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id}}" {{ $ordemservicos->cliente_id == $cliente->id ? 'selected': '' }}>
                    {{ $cliente->nome }}
                </option>
            @endforeach
        </select>

        <label for="empresa_id">EMPRESA:</label>
        <select name="empresa_id" id="empresa_id">
            @foreach ($empresas as $empresa)
                <option value="{{ $empresa->id}}" {{ $ordemservicos->empresa_id == $empresa->id ? 'selected': '' }}>
                    {{ $empresa->razao_social }}
                </option>
            @endforeach
        </select>
        <label for="">DATA INICIAL :</label>
        <input type="date" name="data_inicial" id="data_inicial" value="{{$ordemservicos->data_inicial}}">
        <label for="">DATA FINAL:</label>
        <input type="date" name="data_final" id="data_final" value="{{$ordemservicos->data_final}}">
        <label for="">VALOR:</label>
        <input type="number" name="valor" id="valor" value="{{$ordemservicos->valor}}">

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1" {{ $ordemservicos->status == 1 ? 'selected' : ''}}>Concluido</option>
            <option value="0" {{ $ordemservicos->status == 0 ? 'selected' : ''}}>Em Andamento</option>
        </select> 
        <button type="submit">Atualizar</button>
    </form>
</body>
</html> 