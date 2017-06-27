@extends('layouts.app')
@section('content')
<div class="container">
  <div class="rows">
  <div class="col-xs-12">
    <table border=1>
      <th><h4>Producto</h4></th>
        <h4><th>Precio</th></h4>
        <tr></tr>
          @foreach($shopping_cart as $product)
        <td><h3>{{$product->name}}</h3></td>
        <td><h3>{{$product->price}}</h3></td>
        <tr></tr>
          @endforeach
    </table>
  @foreach($shopping_cart as $product)

  {{$product->name}} {{$product->price}}
  @endforeach
</div>
<div class="col-xs-4" >
  <h4>número de productos {{$productsSize}}</h4>
  <h4>total a pagar: {{$total}}</h4>

  <a type="button" class="btn btn-success" href="{{url('/addresses/create')}}">Enviar Pedido</a>
</div>

<div class="col-xs-12"></div>
@foreach ($products as $product)



      <div class="col-md-4">
      <h3>{{$product->name}}</h3>
      <h4>{{$product->price}}</h4>
      <p>{{$product->description}}</p>
      {!!Form::open(['url'=>'/shopping_carts/','method'=>'POST', 'class'=>'inline-block'])!!}
      {{Form::hidden('order_id',1,['class'=>'form-control'])  }}
      <div class="col-md-12">
        <img style="height:150px;" class="col-xs-12"src="images/products/{{$product->image}}" alt="img-responsive"/>
      </div>
        <input type="hidden" name="product_id" value="{{$product->id}}">
        <input type="hidden" name="product_name" value="{{$product->name}}">
        <input type="hidden" name="product_price" value="{{$product->price}}">
        <input type="hidden" name="product_description" value="{{$product->description}}">

        <label>Cantidad</label>
        <input type="number" name="qty">
        <input type="submit" class="col-xs-12 btn btn-success" name="" value="Agregar al carrito">

      {!!Form::close()!!}
         @if(Auth::user()->admin())
      <a class="col-xs-12" href="{{url('/products/'.$product->id).'/edit'}}">Editar</a>

      @include('products.delete',['product'=>$product])
      @endif
    </div>
    @endforeach
  <div class="col-xs-12">
    {{$products->links()}}
  </div>
</div>
</div>
@endsection
