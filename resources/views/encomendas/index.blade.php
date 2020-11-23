<h3>Encomendas : </h3>
<ul>
@foreach($encomendas as $encomenda)
    <li>
		<a href="{{route('encomendas.show', ['id'=>$encomenda->id_encomenda])}}">
		{{$encomenda->id_encomenda}}
	</li>
@endforeach
</ul>