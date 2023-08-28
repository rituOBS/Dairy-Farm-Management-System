@extends('backend.master')

@section('content')
<div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create Total Holstein Cow</strong></h1>
<hr>

<form action="{{route('holstein.update',$holstein->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input value="{{$holstein->name}}" type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Number </label>
           <input value="{{$holstein->number}}" type="number" class="form-control" required name="cow_number" placeholder="Enter Cow Number">
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
 </div>

@endsection