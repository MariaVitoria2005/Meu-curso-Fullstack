@extends('layouts.app')
    @foreach($clientes as cliente)
        <h1>{{$cliente->nome}}</h1>
        <p>{{$cliente->data_nascimento}}</p>
        <p>{{$cliente->foto}}</p>
        <p>{{$cliente->status}}</p>
    @endforeach
    <a href="{{ route('cliente.edit', $cliente->id) }}">Editar</a>