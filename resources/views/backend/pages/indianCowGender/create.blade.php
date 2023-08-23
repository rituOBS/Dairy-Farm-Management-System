@extends('backend.master')
@section('content')
<div class="container">
<h2>Indian Cow Gender</h2>

  <form class="from" action="{{route('indianCowGender.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
       <div class="form-group">
           <label for="">Enter Cow Weight<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="cow_weight" placeholder="Enter Cow Weight">
       </div>
       <div class="form-group">
           <label for="">Enter Cow Gender <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_gender" placeholder="Enter Cow Gender">
       </div>
      
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection