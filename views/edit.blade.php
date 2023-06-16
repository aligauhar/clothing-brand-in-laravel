@extends('layout')
@section('content')
<div class="col-sm-6" >
    <h1>Edit product</h1>
<form method="post" action="/edit" >
@csrf
  <div class="form-group">
  <input type="hidden" name="id" value="{{$data->id}}" >
 
    <label >Product Name</label>
    <input type="text" name="name" value="{{$data->name}}" class="form-control"  placeholder = "Enter name">
  </div>
  <div class="form-group">
    <label >Discription</label>
    <input type="text" name="discription" value="{{$data->discription}}" class="form-control"  placeholder = "Enter discription">
  </div>
  <div class="form-group">
    <label >price</label>
    <input type="number" name="price" value="{{$data->price}}" class="form-control"  placeholder = "Enter price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop