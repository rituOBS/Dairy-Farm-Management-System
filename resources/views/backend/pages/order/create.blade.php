@extends('backend.master')
@section('content')
<div class="container">
<h2>Order List Record</h2>

    @if($errors->any())
       @foreach ($errors->all() as $error)
       <div>
        <p class="alert alert-danger"> {{$error}}</p>
        </div>
        @endforeach
        @endif
    
  <form class="from" action="{{route('order.store')}}" method="post" >
  @csrf

  <div class="form-group">
           <label for="">Enter Customer Name <span style="color:red">*</span></label>
           <input  type="text" class="form-control" required name="customer_name" placeholder="Enter Customer Name">
    </div>
    <div class="form-group">
           <label for="">Enter Product Quantity <span style="color:red">*</span></label>
           <input type="int" class="form-control" required name="product_quantity" placeholder="Enter ProductQuantity">
    </div>
        <div class="form-group">
           <label for="">Enter Order Date<span style="color:red">*</span></label>
           <input  type="date" class="form-control" required name="order_date" placeholder="Enter Order Date">
       </div>    
       <div class="form-group">
           <label for="">Enter Total Price<span style="color:red">*</span></label>
           <input  type="number" class="form-control" required name="total_price" placeholder="Enter Total Price">
       </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
 

@endsection