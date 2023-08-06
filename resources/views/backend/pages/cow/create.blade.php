@extends('backend.master')
@section('content')
<div class="container">
<h2>Create Cow Lists</h2>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif

  <form class="from" action="{{route('cow.store')}}" method="post">
  @csrf
  <div class="form-group">
           <label for="">Enter Cow Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Weight<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="cow_weight" placeholder="Enter Cow Weight">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Cow Color<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="cow_color" placeholder="Enter Cow Color">
       </div>
       <div class="form-group">
           <label for="">Enter Price<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="cow_price" placeholder="Enter Cow Price">
       </div>
  <br>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>

@endsection