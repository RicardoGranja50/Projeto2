@extends('layout')
@section('titulo')

@endsection
@section('conteudo')

<h3>{{$vendedores->nome}}</h3>
<ul>
    <li>Especialidade: {{$vendedores->especialidade}}</li>
    <li>Email: {{$vendedores->email}}</li>
</ul>
@endsection