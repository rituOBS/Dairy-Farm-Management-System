@extends('backend.master')

@section('content')
<h1>edit cow</h1>

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
       <div><button type="submit" class="btn btn-primary">Submit</button></div>
</form>
@endsection