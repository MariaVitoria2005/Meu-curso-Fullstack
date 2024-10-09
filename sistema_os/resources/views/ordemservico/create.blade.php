<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordemservico Cadastrado</title>
</head>
<body>
    <h1>Nova ordemservico</h1>

    <form action="{{ route('ordemservico.store') }}" method="POST">
        @csrf
        <label for="">SERVIÇO: </label>
        <select neme="servico_id" id="servico_id">
            @foreach ($servicos as $servico)
                <option value="{{  $servicos->id }}">{{ $servico-tipo }}</option>
            @endforeach
        </select>
        <label for="">CLIENTE:</label>
        <select neme="cliente_id" id="cliente_id">
            @foreach ($clientes as $cliente)
                <option value="{{  $clientes->id }}">{{ $cliente-nome }}</option>
            @endforeach
        </select>
        <label for="">EMPRESA: </label>
        <select neme="empresa_id" id="empresa_id">
            @foreach ($empresas as $empresa)
                <option value="{{  $empresas->id }}">{{ $empresa-razao_social }}</option>
            @endforeach
        </select>

        <label>Data_inicial:</label>
        <label type="date" name="data_inicial"></label>
        <label>Data_Final:</label>
        <label type="date" name="data_final"></label>
        <label>valor:</label>
        <label type="number" name="valor"></label>

        <label for="">STATUS:</label>
        <select neme="status" id="status">
            <option value="1">Concluido</option>
            <option value="0">Em Andamento</option>
        </select>

        <!-- <button type="submit">Salvar</button> -->
    </form>
</body>
</html>