@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Milk Collection</strong></h1>
<hr>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
  <form class="from" action="{{route('milk.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
  <div class="form-group">
           <label for="">Enter Milk Quality </label>
           <input  type="text" class="form-control" required name="milk_quality" placeholder="Enter Milk Quality">
       </div>
        <div class="form-group">
           <label for="">Enter Milk Quantity </label>
           <input  type="text" class="form-control" required name="milk_quantity" placeholder="Enter Milk Quantity">
       </div>

        <div class="form-group">
           <label for="">Enter Milk Price </label>
           <input  type="number" class="form-control" required name="milk_price" placeholder="Enter Milk Price">
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