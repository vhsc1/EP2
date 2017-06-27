@extends('layouts.app')
@section('content')
{!!Form::open(['url'=>'/orders/','method'=>'POST', 'class'=>'inline-block'])!!}
Id del cliente:
{{  Form::number('user_id', Auth::user()->id,['class'=>'form-control'])  }}
{{  Form::text('status', 'Activo',['class'=>'form-control'])  }}
<input type="submit" class="col-xs-12 btn btn-success" name="" value="Crear orden">
  {!!Form::close()!!}


@endsection
