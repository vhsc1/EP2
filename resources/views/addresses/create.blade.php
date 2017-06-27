@extends('layouts.app')
@section('content')
  {!!Form::open(['url' => '/addresses/','method' => 'POST', 'class' => 'inline-block']) !!}

    Calle:
    {{  Form::text('street','',['class'=>'form-control'])  }}
    Codigo postal:
    {{  Form::text('postcode','',['class'=>'form-control'])  }}

    Colonia:
    {{  Form::text('neighborhood','',['class'=>'form-control'])  }}
    Ciudad:
    {{  Form::text('city','',['class'=>'form-control'])  }}
    <br><br>


  <input type="submit" class="btn btn-success" value="Guardar">
  {!! Form::close() !!}

@endsection
