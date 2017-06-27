@extends('layouts.app')
@section('content')
  {!!Form::open(['url' => '/products/'.$product->id, 'method' => 'PATCH','class' => 'inline-block', 'files' => true ]) !!}
    Ingrese imagen: 
    {!! Form::file('image') !!}
    Nombre del producto:
    {{  Form::text('name',$product->name,['class'=>'form-control'])  }}
    Descripción del producto:
    {{  Form::textarea('description',$product->description,['class'=>'form-control'])  }}
    Precio del producto:
    {{  Form::number('price',$product->price,['class'=>'form-control'])  }}
    Categoría del producto:
    {{  Form::select('category_id',$categories,['class'=>'form-control'])  }}<br><br>
    <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}

@endsection
