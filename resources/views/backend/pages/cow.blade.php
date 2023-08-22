@extends('backend.master')
@section('content')
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter name</label>
    <input type="text" class="form-control" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="namelHelp" class="form-text text-muted">We'll never share your name with anyone else.</small>
  </div>
 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection