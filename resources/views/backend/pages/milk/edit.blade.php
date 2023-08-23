@extends('backend.master')

@section('content')
<h1>edit milk</h1>

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
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
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
       <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection