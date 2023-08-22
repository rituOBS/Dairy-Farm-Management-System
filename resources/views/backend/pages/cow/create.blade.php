@extends('backend.master')
@section('content')
<div class="container">
<h2>Cow Lists</h2>



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