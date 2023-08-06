@extends('backend.master')
@section('content')
<div class="container">
<h2>Create New Category</h2>


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
           <label for="">Enter Category Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="category_name" placeholder="Enter Category Name">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="category_image" placeholder="image">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>

@endsection