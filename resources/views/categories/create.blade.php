@extends('layouts.app')
@section('content')
  {!!Form::open(['url' => '/categories/','method' => 'POST', 'class' => 'inline-block']) !!}

    Nombre del producto:
    {{  Form::text('name','',['class'=>'form-control'])  }}
    Descripción del producto:
    {{  Form::textarea('description','',['class'=>'form-control'])  }}
    <br><br>


  <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}

@endsection
