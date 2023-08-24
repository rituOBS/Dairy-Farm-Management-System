@extends('backend.master')
@section('content')
<div class="container">
<h2>Indian Cow (Feeding-Item)</h2>


@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
  <form class="from" action="{{route('indianFeeding.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Feeding Name </label>
           <input  type="text" class="form-control" required name="feeding_name" placeholder="Enter Feeding Name">
       </div>
        <div class="form-group">
           <label for="">Enter Feeding Quantity </label>
           <input  type="number" class="form-control" required name="feeding_quantity" placeholder="Enter Feed Quantity">
       </div> 
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection