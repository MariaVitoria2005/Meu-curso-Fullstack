@extends('layouts.app')

    <form action="{{ route('cliente.update', $clientes->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{$clientes->nome}}">
        <label for="">Data de Nascimento:</label>
        <input type="Date" name="data_nascimento" id="data_nascimento" value="{{$clientes->data_nascimento}}">
        <label for="">Foto:</label>
        <input type="file" name="foto" id="foto" value="{{$clientes->foto}}"></input>
        <img src="{{  asset('storage/' . $clientes->foto) }}" alt="" width="80" height="60">
        <!-- <label for="">Status:</label>
        <input type="text" name="status" id="status" value="{{$clientes->status}}"> -->
        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="1" {{ $clientes->status ? 'selected' : '' }}>Ativo</option>
            <option value="0" {{ !$clientes->status ? 'selected' : '' }}>Inativo</option>
        </select> 
        <button type="submit">Atualizar</button>
    </form>