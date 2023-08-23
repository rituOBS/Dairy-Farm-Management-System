@extends('backend.master')


@section('content')
<h2>Edit Staff Information</h2>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
              
<form action="{{route('staff.update',$staff->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
           <label for="">Enter Staff Name <span style="color:red">*</span></label>
           <input value="{{$staff->name}}" type="text" class="form-control" required name="staff_name" placeholder="Enter Staff Name">
    </div>
        <div class="form-group">
           <label for="">Enter Staff Designation<span style="color:red">*</span></label>
           <input value="{{$staff->designation}}" type="text" class="form-control" required name="staff_designation" placeholder="Enter Staff Designation">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Staff Email<span style="color:red">*</span></label>
           <input value="{{$staff->email}}" type="email" class="form-control" required name="staff_email" placeholder="Enter Staff Email">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input  type="file" class="form-control" name="staff_image" placeholder="image">
        </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection