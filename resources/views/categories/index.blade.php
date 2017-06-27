@extends('layouts.app')
@section('content')
<div class="container">
  <div class="col-md-4">
  @foreach ($categories as $category)
    <h2>{{$category->id}}</h2>
    <h2>{{$category->name}}</2>
    <p>{{$category->description}}
      @include('categories.delete',['category'=>$category])
  @endforeach
  </p><br>
  </div>
</div>
@endsection
