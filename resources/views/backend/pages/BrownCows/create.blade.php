@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">

 <div class="container">
<h1 class="text-center"><strong>Create New Brown Cow</strong></h1>
<hr>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-success"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        

  <form class="from" action="{{route('brownCow.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Number</label>
           <input  type="number" class="form-control" required name="cow_number" placeholder="Enter Cow Number">
       </div> 
       <br>
      <button type="submit" class="btn btn-success">Submit</button>
          </form>
            </div>
            </div>
            </div>
          </div>
        </div>
    </div>
</div>


@endsection