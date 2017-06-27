@extends('layouts.app')
@section('content')
<div class="container">
  <div class="rows">
    <div class="panel-heading"><center><h4>Pedidos</h4></center></div>
  <div class="panel-body">
    <table class="table">
      <th>id</th>
      <th>cantidad</th>
      <th>producto</th>
      <tr></tr>
      @foreach ($order_products as $order_products)
      <td>{{$order_products->id}}</td>
      <td>{{$order_products->qty}}</td>
      <td>{{$order_products->name}}</td>
      <tr></tr>
        {!!Form::close()!!}
          @endforeach
    </table>

@endsection
