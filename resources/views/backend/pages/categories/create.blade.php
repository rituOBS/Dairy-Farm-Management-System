@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">

 <div class="container">
<h1 class="text-center"><strong>Create New Categories</strong></h1>
<hr>


@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-success"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
  <form class="from" action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
           <label for="">Enter Category Name </label>
           <input  type="text" class="form-control" required name="category_name" placeholder="Enter Category Name">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="category_image" placeholder="image">
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


@endsection