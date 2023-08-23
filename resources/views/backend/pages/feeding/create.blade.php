@extends('backend.master')
@section('content')
<div class="container">
<h2>Brown Cow (Feeding-Item)</h2>

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
           <label for="">Enter Feed Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_name" placeholder="Enter Feed Name">
       </div>
        <div class="form-group">
           <label for="">Enter Feed Quantity<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="feed_quantity" placeholder="Enter Feed Quantity">
       </div> 
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection