@extends('layout')
@section('titulo')

@endsection
@section('conteudo')


<h3>{{$produtos->designacao}}</h3>
<ul>
    <li>Stock: {{$produtos->stock}}</li>
    <li>Preço: {{$produtos->preco}}€</li>
    @foreach($produtos->encomendas as $encomenda)
    <li>Encomenda: <a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">{{$encomenda->id_encomenda}}</a></li>
    @endforeach
</ul>

@endsection