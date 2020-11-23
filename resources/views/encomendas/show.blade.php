<h3>{{$encomendas->cliente->nome}}</h3>
<ul>
    <li>Data: {{$encomendas->data}}</li>
    <li>Observações: {{$encomendas->observacoes}}</li>
    <li>Vendedor: {{$encomendas->vendedor->nome}}</li>
    @foreach($encomendas->produtos as $produto)
    <li>Produto: {{$produto->designacao}}</li>
    @endforeach
</ul>