@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Employee Lists</h2>
<form>
  @csrf

  <form action="{{route('cow.store')}}" method="post">
  <div class="form-group">
    <label >Cow Name:</label>
    <input type="text" class="form-control"name="name"  placeholder="Enter name">
  </div>
  <div class="form-group">
    <label >Digestive:</label>
    <input type="text" class="form-control"name="designation"  placeholder="Enter Digestive">
  </div>
  <div class="form-group">
    <label >Status:</label>
    <input type="text" class="form-control"name="status"  placeholder="Enter status">
  </div>
  <div class="form-group">
    <label >Price:</label>
    <input type="number" class="form-control"name="price"  placeholder="Enter price">
  </div>
  <div class="form-group">
    <label >Color:</label>
    <input type="text" class="form-control"name="color"  placeholder="Enter color">
  </div>
  
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection