@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Milk Collection Record</h2>

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
           <label for="">Enter Milk Quality <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="milk_quality" placeholder="Enter Milk Quality">
       </div>
        <div class="form-group">
           <label for="">Enter Milk Quantity<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="milk_quantity" placeholder="Enter Milk Quantity">
       </div>

        <div class="form-group">
           <label for="">Enter Milk Price<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="milk_price" placeholder="Enter Milk Price">
       </div>
     <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection