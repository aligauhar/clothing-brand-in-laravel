@extends('layout')
@section('content')
<div class="col-sm-6" >
<form method="post" action="" >
@csrf
  <div class="form-group">
    <label >Product Name</label>
    <input type="text" name="name" class="form-control"  placeholder = "Enter name">
  </div>
  <div class="form-group">
    <label >Discription</label>
    <input type="text" name="discription" class="form-control"  placeholder = "Enter discription">
  </div>
  <div class="form-group">
    <label >price</label>
    <input type="number" name="price" class="form-control"  placeholder = "Enter price">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@stop