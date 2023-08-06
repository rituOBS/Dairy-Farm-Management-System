@extends('backend.master')


@section('content')
<h2>Vaccine Monitoring</h2>

        
<form action="{{route('vaccine.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
    </div>
        <div class="form-group">
           <label for="">Enter Vaccine Date<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="vaccine_date" placeholder="Enter Vaccine Date">
       </div>    
       
       <div class="form-group">
           <label for="">Remark<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="vaccine_remark" placeholder="Remark">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="staff_image" placeholder="image">
        </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection