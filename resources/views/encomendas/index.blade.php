<h3>Encomendas : </h3>
<ul>
@foreach($encomendas as $encomenda)
    <li>
		<a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">
		{{$encomenda->cliente->nome}}
	</li>
@endforeach
</ul>