@extends('backend.master')


@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Vaccine Monitor</strong></h1>
<hr>

        
<form action="{{route('vaccineMonitor.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
    </div>
        <div class="form-group">
           <label for="">Enter Vaccine Date </label>
           <input  type="date" class="form-control" required name="vaccine_date" placeholder="Enter Vaccine Date">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Vaccine Remark </label>
           <input  type="text" class="form-control" required name="vaccine_remark" placeholder="Enter Vaccine Remark">
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
@endsection