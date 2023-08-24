@extends('backend.master')

@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Edit Cow List</strong></h1>
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

       
       <form action="{{route('cow.update',$cow->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

       <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input value="{{$cow->name}}" type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Weight<span style="color:red">*</span></label>
           <input  value="{{$cow->weighr}}" type="number" class="form-control" required name="cow_weight" placeholder="Enter Cow Weight">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Cow Color<span style="color:red">*</span></label>
           <input  value="{{$cow->color}}" type="text" class="form-control" required name="cow_color" placeholder="Enter Cow Color">
       </div>
       <div class="form-group">
           <label for="">Enter Price<span style="color:red">*</span></label>
           <input  value="{{$cow->price}}" type="number" class="form-control" required name="cow_price" placeholder="Enter Cow Price">
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