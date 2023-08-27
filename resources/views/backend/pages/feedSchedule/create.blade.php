@extends('backend.master')


@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Feed Schedule</strong></h1>
<hr>


            
<form action="{{route('feedSchedule.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Types of Animal </label>
           <input  type="text" class="form-control" required name="animal_type" placeholder="Enter Types of Animal">
    </div>
        <div class="form-group">
           <label for="">Enter Feeding During </label>
           <input  type="text" class="form-control" required name="feeding_during" placeholder="Enter Feeding During">
       </div>   
       <div class="form-group">
           <label for="">Enter Green grass </label>
           <input  type="text" class="form-control" required name="green_grass" placeholder="Enter Green grass">
    </div>
    <div class="form-group">
           <label for="">Enter Dry Fooder </label>
           <input  type="text" class="form-control" required name="dry_fooder" placeholder="Enter Dry Fooder">
    </div> 
       
    <div class="form-group">
           <label for="">Enter Soybean Meal </label>
           <input  type="text" class="form-control" required name="soybean_meal" placeholder="Enter Soybean Meal">
       </div>
       <div class="form-group">
           <label for="">Enter Paddy Straw </label>
           <input  type="text" class="form-control" required name="paddy_straw" placeholder="Enter Paddy Straw">
       </div>
       <div class="form-group">
           <label for="">Enter Concentrate Mixture </label>
           <input  type="text" class="form-control" required name="concentrate_mixture" placeholder="Enter Concentrate Meal">
       </div>
       <div class="form-group">
           <label for="">Enter Wheat Bran </label>
           <input  type="text" class="form-control" required name="wheat_bran" placeholder="Enter Wheat Bran">
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
@endsection