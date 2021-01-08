@extends('layout')
@section('titulo')

@endsection
@section('conteudo')

<h3> <a href="{{route('clientes.show',['id'=>$encomendas->cliente->id_cliente])}}">{{$encomendas->cliente->nome}}</a></h3>
<ul>
    <li>Data: {{$encomendas->data}}</li>
    <li>Observações: {{$encomendas->observacoes}}</li>
    <li>Vendedor: <a href="{{route('vendedores.show',['id'=>$encomendas->vendedor->id_vendedor])}}">{{$encomendas->vendedor->nome}}</a></li>
    @foreach($encomendas->produtos as $produto)
    <li>Produto: <a href="{{route('produtos.show',['id'=>$produto->id_produto])}}">{{$produto->designacao}}</a></li>
    @endforeach
</ul>
@endsection