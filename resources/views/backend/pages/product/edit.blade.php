@extends('backend.master')

@section('content')
<h1>edit product</h1>

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

       <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

    <div class="form-group">
           <label for="">Enter Product Name <span style="color:red">*</span></label>
           <input  value="{{$product->name}}" type="text" class="form-control" required name="product_name" placeholder="Enter product Name">
    </div>
        <div class="form-group">
           <label for="">Enter Product Category<span style="color:red">*</span></label>
           <input  value="{{$product->category}}" type="text" class="form-control" required name="product_category" placeholder="Enter Product Category">
       </div>    
       
       <div class="form-group">
           <label for="">Enter Product Quantity<span style="color:red">*</span></label>
           <input   value="{{$product->quatity}}" type="text" class="form-control" required name="product_quantity" placeholder="Enter Product Quantity">
       </div>
       <div class="form-group">
           <label for="">Enter Total Price<span style="color:red">*</span></label>
           <input  value="{{$total->price}}" type="number" class="form-control" required name="total_price" placeholder="Enter Total Price">
       </div>
        <div><button type="submit" class="btn btn-success">Submit</button></div>
</form>
@endsection