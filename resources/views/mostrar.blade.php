@extends('layout')
@section('conteudo')

@if(is_null($cliente))
  <h3>Cliente nao encontrado</h3>
  <h4>Clientes:</h4>
  @foreach($clientes as $c)
    <ul>
      <li>{{$c->nome}}</li>
    </ul>
  @endforeach
@else 
  <table class="table table-dark">
  <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Morada</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        <th scope="col">Data Encomenda</th>
      </tr>
  </thead>
  @foreach($clientes as $costumer)
    <tbody>
        <tr>
          <th scope="row">{{$costumer->nome}}</th>
          <td>{{$costumer->morada}}</td>
          <td>{{$costumer->telefone}}</td>
          <td>{{$costumer->email}}</td>
          @foreach($costumer->encomenda as $encomendas)
          <td>{{$encomendas->data}}</td>
          @endforeach
        </tr>
      </tbody>
  @endforeach
  </table>
@endif












