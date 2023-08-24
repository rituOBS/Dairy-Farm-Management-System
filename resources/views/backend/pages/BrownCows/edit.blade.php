@extends('backend.master')
@section('content')
<div class="container">
<h2>Total Brown Cow</h2>

<form action="{{route('brown.update',$brown->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
  <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input value="{{$brown->name}}" type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Number<span style="color:red">*</span></label>
           <input value="{{$brown->number}}" type="number" class="form-control" required name="cow_number" placeholder="Enter Cow Number">
       </div> 
  <br>
  <button type="submit" class="btn btn-info">Submit</button>
</form>
</div>

@endsection