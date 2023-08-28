@extends('backend.master')


@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Vaccine Schedule</strong></h1>
<hr>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
            
<form action="{{route('vaccineSchedule.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Cow Disease </label>
           <input  type="text" class="form-control" required name="cow_disease" placeholder="Enter Cow Disease">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Name </label>
           <input  type="text" class="form-control" required name="vaccine_name" placeholder="Enter Vaccine Name">
    </div>
        <div class="form-group">
           <label for="">Enter Vaccine Time </label>
           <input  type="text" class="form-control" required name="vaccine_time" placeholder="Enter Vaccine Date">
       </div>   
       <div class="form-group">
           <label for="">Enter Vaccine Immunity </label>
           <input  type="text" class="form-control" required name="vaccine_immunity" placeholder="Enter Vaccine Immunity">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Dose </label>
           <input  type="number" class="form-control" required name="vaccine_dose" placeholder="Enter Vaccine Dose">
    </div> 
       
    <div class="form-group">
           <label for="">Enter Vaccine Remark </label>
           <input  type="text" class="form-control" required name="vaccine_remark" placeholder="Enter Vaccine Remark">
         </div>
         <br>
        <button type="submit" class="btn btn-info">Submit</button>
        </form>
       </div>
      </div>
      </div>
    </div>
  </div>
 </div>
@endsection