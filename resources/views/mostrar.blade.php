@extends('layout')
@section('conteudo')


@if(empty($cliente))
  <h3>Cliente nao encontrado</h3>
  <h4>Clientes:</h4>
@endif

<table class="table table-dark">
  <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">Morada</th>
        <th scope="col">Telefone</th>
        <th scope="col">Email</th>
        </tr>
  </thead>
  @foreach($clientes as $costumer)
  @if(isset($clientes))
        <tbody>
          <tr>
            <th scope="row">{{$costumer->nome}}</th>
            <td>{{$costumer->morada}}</td>
            <td>{{$costumer->telefone}}</td>
            <td>{{$costumer->email}}</td>
          </tr>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
@else
    <ul>
      <li>{{$costumer->nome}}</li>
    </ul>
@endif
@endforeach
    </table>
@endsection















