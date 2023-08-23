@extends('backend.master')


@section('content')
<h2>Vaccine Schedule</h2>

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
           <label for="">Enter Cow Disease <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_disease" placeholder="Enter Cow Disease">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="vaccine_name" placeholder="Enter Vaccine Name">
    </div>
        <div class="form-group">
           <label for="">Enter Vaccine Time<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="vaccine_time" placeholder="Enter Vaccine Date">
       </div>   
       <div class="form-group">
           <label for="">Enter Vaccine Immunity <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="vaccine_immunity" placeholder="Enter Vaccine Immunity">
    </div>
    <div class="form-group">
           <label for="">Enter Vaccine Dose <span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="vaccine_dose" placeholder="Enter Vaccine Dose">
    </div> 
       
    <div class="form-group">
           <label for="">Enter Vaccine Remark<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="vaccine_remark" placeholder="Enter Vaccine Remark">
       </div>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection