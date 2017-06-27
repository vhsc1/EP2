
{!!Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block']) !!}
<input type="submit" class="btn btn-default" name="" value="DELETE">
{!! Form::close() !!}
