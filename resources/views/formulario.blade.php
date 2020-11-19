@extends('layout')
@section('titulo')
Formulario
@endsection
@section('conteudo')
<div class="container">
    <div class="row">
        <div class="col-sm">
            Pesquisa pelo cliente para procurar pela ficha de cada cliente.
        </div>
        <div class="col-sm">
            Basta o primeiro nome
        </div>
    </div>
</div>
<br>
<form method="post" action="{{route('mostrar')}}">
        @csrf
    <label for="name"> Nome Cliente </label>
    <input type="text" name="nome">
</form>
<div class="col-sm-3">
@endsection

@section('c')
@endsection