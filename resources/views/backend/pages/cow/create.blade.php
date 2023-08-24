@extends('backend.master')
@section('content')
<div class="row">
  <div class="col-md-8 offset-md-2 ">
    <div class="card mt-5 ">
      <div class="card-header">
        <div class="card-body">
        <div class="container">
<h1 class="text-center"><strong>Create New Cow List</strong></h1>
<hr>



  <form class="from" action="{{route('cow.store')}}" method="post">
  @csrf


  <div class="form-group">
           <label for="">Enter Cow Shade<span style="color:red">*</span></label>
           <select name="shade_id" class="form-control" id="">
            @foreach($shades as $shade)
                <option value="{{$shade->id}}">{{$shade->name}}</option>
            @endforeach
           </select>
       </div> 

  <div class="form-group">
           <label for="">Enter Cow Name </label>
           <input  type="text" class="form-control" required name="cow_name" placeholder="Enter Cow Name">
       </div>
        <div class="form-group">
           <label for="">Enter Cow Weight</label>
           <input  type="number" class="form-control" required name="cow_weight" placeholder="Enter Cow Weight">
       </div> 
       
       <div class="form-group">
           <label for="">Enter Cow Color</label>
           <input  type="text" class="form-control" required name="cow_color" placeholder="Enter Cow Color">
       </div>
       <div class="form-group">
           <label for="">Enter Price</label>
           <input  type="number" class="form-control" required name="cow_price" placeholder="Enter Cow Price">
       </div>
        <br>
       <button type="submit" class="btn btn-dark">Submit</button>
        </form>
       </div>
       </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection