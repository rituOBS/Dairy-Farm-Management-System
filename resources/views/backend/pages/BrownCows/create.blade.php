@extends('backend.master')
@section('content')
<div class="container">
<h2>Total Brown Cow</h2>

  <form class="from" action="{{route('brownCow.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Number<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="cow_number" placeholder="Enter Cow Number">
       </div> 
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection