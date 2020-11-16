<h3>{{$encomendas->cliente->nome}}</h3>
<ul>
    <li>Data: {{$encomendas->data}}</li>
    <li>Observações: {{$encomendas->observacoes}}</li>
    <li>Vendedor: {{$encomendas->vendedor->nome}}</li>
    <li>Produto: {{$encomendas->encomenda_produto->produto->designacao}}</li>
</ul>