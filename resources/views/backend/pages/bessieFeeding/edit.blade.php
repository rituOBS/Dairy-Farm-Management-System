@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">

 <div class="container">
<h1 class="text-center"><strong>Edit Feeding Daily Consumption</strong></h1>
<hr>


@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
<form action="{{route('bessieFeeding.update',$bessieFeeding->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  @method('put')
  <div class="form-group">
           <label for="">Enter Feeding Name </label>
           <input value="{{$bessieFeeding->name}}" type="text" class="form-control" required name="feeding_name" placeholder="Enter Feeding Name">
       </div>
        <div class="form-group">
           <label for="">Enter Feeding Quantity</label>
           <input value="{{$bessieFeeding->quantity}}" type="number" class="form-control" required name="feeding_quantity" placeholder="Enter Feed Quantity">
       </div> 
  <br>
  <button type="submit" class="btn btn-dark">Update</button>
        </form>
        </div>
         </div>
        </div>
     </div>
    </div>
    </div>
</div>


@endsection