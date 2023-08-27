@extends('backend.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Edit Milk Collection List</strong></h1>
<hr>

    @if(session()->has('msg'))
    <p class="alert alert-success"> {{session()->get('msg')}}</p>
    @endif

    @if ($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
       </div>
       @endforeach
       @endif

       <form action="{{route('milk.update',$milk->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            
       <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input value="{{$milk->name}}" type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
       <div class="form-group">
           <label for="">Enter Milk Quality <span style="color:red">*</span></label>
           <input  value="{{$milk->quality}}" type="text" class="form-control" required name="milk_quality" placeholder="Enter Milk Quality">
       </div>
        <div class="form-group">
           <label for="">Enter Milk Quantity<span style="color:red">*</span></label>
           <input  value="{{$milk->quantity}}" type="text" class="form-control" required name="milk_quantity" placeholder="Enter Milk Quantity">
       </div>

        <div class="form-group">
           <label for="">Enter Milk Price<span style="color:red">*</span></label>
           <input  value="{{$milk->price}}" type="number" class="form-control" required name="milk_price" placeholder="Enter Milk Price">
           </div>
           <br>
       <div><button type="submit" class="btn btn-dark">Update</button></div>
         </form>
       </div>
      </div>
     </div>
    </div>
  </div>
 </div>
@endsection