@extends('backend.master')


@section('content')

<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create Staff Information</strong></h1>
<hr>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
              
<form action="{{route('staff.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Staff Name </label>
           <input  type="text" class="form-control" required name="staff_name" placeholder="Enter Staff Name">
    </div>
        <div class="form-group">
           <label for="">Enter Staff Designation</label>
           <input  type="text" class="form-control" required name="staff_designation" placeholder="Enter Staff Designation">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Staff Email</label>
           <input  type="email" class="form-control" required name="staff_email" placeholder="Enter Staff Email">
       </div>
       <div class="form-group mb-3">
            <label for="">Image</label>
            <input type="file" class="form-control" name="staff_image" placeholder="image">
        </div>
  <button type="submit" class="btn btn-dark">Submit</button>
</form>
</div>
</div>
      </div>
      </div>
    </div>
  </div>
 </div>
@endsection