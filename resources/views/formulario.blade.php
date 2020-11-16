@extends('layout')
@section('titulo')
Formulario
@endsection
@section('conteudo')
<form method="post" action="{{route('mostrar')}}">
        @csrf
    <label for="name"> Nome Cliente </label>
    <input type="text" name="nome">
</form>
<div class="col-sm-3">
@endsection

@section('c')
@endsection