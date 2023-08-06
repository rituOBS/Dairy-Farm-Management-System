@extends('backend.master')


@section('content')
<h2>Staff Information</h2>

        
<form action="{{route('staff.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Staff Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="staff_name" placeholder="Enter Staff Name">
    </div>
        <div class="form-group">
           <label for="">Enter Staff Designation<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="staff_designation" placeholder="Enter Staff Designation">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Staff Email<span style="color:red">*</span></label>
           <input  type="email" class="form-control" required name="staff_email" placeholder="Enter Staff Email">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="staff_image" placeholder="image">
        </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection