@extends('backend.master')


@section('content')
<h2>Create Product list</h2>

@if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
        
<a href="{{route('product.create')}}"><button class="btn btn-success ">Create</button></a>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
           <label for="">Enter Product Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="product_name" placeholder="Enter product Name">
    </div>
        <div class="form-group">
           <label for="">Enter Product Category<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="product_category" placeholder="Enter Product Category">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Product Quantity<span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="product_quantity" placeholder="Enter Product Quantity">
       </div>
       <div class="form-group">
           <label for="">Enter Total Price<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="total_price" placeholder="Enter Total Price">
       </div>
       <div class="form-group">
            <label for="">Image</label>
            <input type="file" class="form-control" name="product_image" placeholder="image">
        </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection