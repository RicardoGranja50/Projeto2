<h3>Produtos : </h3>
<ul>
@foreach($produtos as $produto)
    <li>
        <a href="{{route('produtos.show', ['id'=>$produto->id_produto])}}">
		{{$produto->designacao}}
	</li>
@endforeach
</ul>