<h3>{{$produtos->designacao}}</h3>
<ul>
    <li>Stock: {{$produtos->stock}}</li>
    <li>Preço: {{$produtos->preco}}€</li>
    @foreach($produtos->encomendas as $encomenda)
    <li>Encomenda: {{$encomenda->id_encomenda}}</li>
    @endforeach
</ul>