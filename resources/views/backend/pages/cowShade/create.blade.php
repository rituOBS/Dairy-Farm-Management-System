@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Cow Shades</strong></h1>
<hr>


@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif

  <form class="from" action="{{route('cowShade.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Shade Name </label>
           <input  type="text" class="form-control" required name="shade_name" placeholder="Enter Shade Name">
       </div>
        <div class="form-group">
           <label for="">Enter Standing Space </label>
           <input  type="text" class="form-control" required name="standing_space" placeholder="Enter Standing Space">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Standing Width </label>
           <input  type="text" class="form-control" required name="standing_width" placeholder="Enter Standing Width">
       </div>
       <div class="form-group">
           <label for="">Enter Central Passage </label>
           <input  type="text" class="form-control" required name="central_passage" placeholder="Enter Central Passage">
       </div>
       <div class="form-group">
           <label for="">Enter Feed Alley </label>
           <input  type="text" class="form-control" required name="feed_alley" placeholder="Enter Feed Alley">
       </div>
  <br>
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