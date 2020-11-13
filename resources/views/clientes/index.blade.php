<h3>Clientes : </h3>
<ul>
@foreach($clientes as $cliente)
    <li>
        <a href="{{route('clientes.show', ['id'=>$cliente->id_cliente])}}">
		{{$cliente->nome}}
	</li>
@endforeach
</ul>