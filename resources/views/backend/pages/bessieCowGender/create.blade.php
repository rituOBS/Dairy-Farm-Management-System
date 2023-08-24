@extends('backend.master')
@section('content')
<div class="container">
<h2>Bessie Cow Gender</h2>

  <form class="from" action="{{route('bessieCowGender.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
       <div class="form-group">
           <label for="">Enter Cow Weight</label>
           <input  type="number" class="form-control" required name="cow_weight" placeholder="Enter Cow Weight">
       </div>
       <div class="form-group">
           <label for="">Enter Cow Gender </label>
           <input  type="text" class="form-control" required name="cow_gender" placeholder="Enter Cow Gender">
       </div>
      
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection