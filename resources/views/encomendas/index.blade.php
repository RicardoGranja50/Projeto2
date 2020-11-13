<h3>Encomendas : </h3>
<ul>
@foreach($encomendas->cliente as $client)
    <li>
		{{$client->nome}}
	</li>
@endforeach
</ul>