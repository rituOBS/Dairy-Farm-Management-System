@extends('backend.master')


@section('content')
<h2>Vaccine Schedule</h2>


            
<form action="{{route('vaccineSchedule.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Feed Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="feed_name" placeholder="Enter Feed Name">
    </div>
        <div class="form-group">
           <label for="">Enter Cow Name<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
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
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection