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
            
        <form action="{{route('vaccineSchedule.update',$vaccineSchedule->id)}}" method="post">
            @csrf
            @method('put')
    <div class="form-group">
           <label for="">Enter Cow Disease </label>
           <input value="{{$vaccineSchedule->diseass}}"  type="text" class="form-control" required name="cow_disease" placeholder="Enter Cow Disease">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Name </label>
           <input value="{{$vaccineSchedule->name}}"  type="text" class="form-control" required name="vaccine_name" placeholder="Enter Vaccine Name">
    </div>
        <div class="form-group">
           <label for="">Enter Vaccine Time </label>
           <input value="{{$vaccineSchedule->time}}"  type="text" class="form-control" required name="vaccine_time" placeholder="Enter Vaccine Date">
       </div>   
       <div class="form-group">
           <label for="">Enter Vaccine Immunity </label>
           <input value="{{$vaccineSchedule->immunity}}"  type="text" class="form-control" required name="vaccine_immunity" placeholder="Enter Vaccine Immunity">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Dose </label>
           <input value="{{$vaccineSchedule->dose}}"  type="number" class="form-control" required name="vaccine_dose" placeholder="Enter Vaccine Dose">
    </div> 
       
    <div class="form-group">
           <label for="">Enter Vaccine Remark </label>
           <input value="{{$vaccineSchedule->remark}}"  type="text" class="form-control" required name="vaccine_remark" placeholder="Enter Vaccine Remark">
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
@endsection