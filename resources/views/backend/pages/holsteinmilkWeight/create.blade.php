@extends('backend.master')
@section('content')
<div class="container">
<h2>Holstein Cow (Milk-Per Day)</h2>

  <form class="from" action="{{route('holsteinmilkWeight.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
       <div class="form-group">
           <label for="">Enter Milk Category <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="milk_category" placeholder="Enter Milk Category">
       </div>
        <div class="form-group">
           <label for="">Enter Milk Weight<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="milk_weight" placeholder="Enter Milk Weight">
       </div> 
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection