@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Edit Holstein Cow (Milk Per-day)</strong></h1>
<hr>

<form action="{{route('holsteinMilkWeight.update',$holsteinMilkWeight->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  value="{{$holsteinMilkWeight->name}}" type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
       <div class="form-group">
           <label for="">Enter Milk Category </label>
           <input  value="{{$holsteinMilkWeight->category}}" type="text" class="form-control" required name="milk_category" placeholder="Enter Milk Category">
       </div>
        <div class="form-group">
           <label for="">Enter Milk Weight </label>
           <input  value="{{$holsteinMilkWeight->weight}}" type="number" class="form-control" required name="milk_weight" placeholder="Enter Milk Weight">
       </div> 
    <br>
     <button type="submit" class="btn btn-dark">Update</button>
        </form>
         </div>
        </div>
       </div>
      </div>
    </div>
  </div>
 </div>

@endsection