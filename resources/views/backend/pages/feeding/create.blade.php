@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Feed List</strong></h1>
<hr>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif

  <form class="from" action="{{route('feeding.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Feed Name </label>
           <input  type="text" class="form-control" required name="feed_name" placeholder="Enter Feed Name">
       </div>
        <div class="form-group">
           <label for="">Enter Feed Quantity </label>
           <input  type="number" class="form-control" required name="feed_quantity" placeholder="Enter Feed Quantity">
       </div> 
      <br>
       <button type="submit" class="btn btn-dark">Submit</button>
       </form>
       </div>
        </div>
             </div>
            </div>
        </div>
    </div>
</div>

@endsection