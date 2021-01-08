@extends('layout')
@section('titulo')

@endsection
@section('conteudo')
    <h3 style="font-family:Noto Sans"> Adicionar Encomenda</h3><br>
    <form action="{{route('encomendas.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <b>Produto</b>
        <select name="id_produto">
            @foreach($produtos as $produto)
                <option value="{{$produto->id_produto}}">{{$produto->designacao}}</option>
            @endforeach
        </select>
        <br><br>
        @if($errors->has('id_produto'))
            <b style="color:red">Insira o produto</b><br>
        @endif

        <b>Vendedor</b>
        <select name="id_vendedor">
            @foreach($vendedores as $vendedor)
                <option value="{{$vendedor->id_vendedor}}">{{$vendedor->nome}}</option>
            @endforeach
        </select>
        <br><br>
        @if($errors->has('id_vendedor'))
            <b style="color:red">Insira o vendedor</b><br>
        @endif

        <b>Cliente</b>
        <select name="id_cliente">
            @foreach($clientes as $cliente)
                <option value="{{$cliente->id_cliente}}">{{$cliente->nome}}</option>
            @endforeach
        </select>
        <br><br>
        @if($errors->has('id_cliente'))
            <b style="color:red">Insira o cliente</b><br>
        @endif

        Data: (<b style="color:red">*</b>)<input type="date" name="data" value="{{old('data')}}"><br><br>
        @if($errors->has('data'))
            <b style="color:red">Insira uma data</b><br>
        @endif

        Observaçao: (<b style="color:red">*</b>)<input type="text" name="data" value="{{old('observacao')}}"><br><br>
        @if($errors->has('observacao'))
            <b style="color:red">Insira um comentario entre 5 e 200 caracteres</b><br>
        @endif
@endsection