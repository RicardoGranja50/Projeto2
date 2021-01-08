@extends('layout')
@section('titulo')

@endsection
@section('conteudo')

<h3>Vendedores : </h3>
<ul>
@foreach($vendedores as $vendedor)
    <li>
        <a href="{{route('vendedores.show', ['id'=>$vendedor->id_vendedor])}}">
		{{$vendedor->nome}}
	</li>
@endforeach
</ul>

@endsection